<?php
	$branch = $_POST['thuonghieu'];
	$tensanpham = $_POST['tensanpham'];
    $status = $_POST['soluong'];

	// Database connection
	$conn = new mysqli('localhost','id11535187_loczippo','y0CS%yFE()E-fCfx','id11535187_show');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into hienthidulieu(branch, tensanpham, status) values(?, ?, ?)");
		$stmt->bind_param("sss", $branch, $tensanpham, $status);
		$execval = $stmt->execute();
		header('Location: index.html');
		$stmt->close();
		$conn->close();
	}
?>