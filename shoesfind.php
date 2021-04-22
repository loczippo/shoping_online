<!DOCTYPE html>
<?php
include 'connect.php'
?>
<html lang="en">
  <!-- 
    REMAKE lại trang: https://colorlib.com/preview/#karma
   -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Document</title>
  <!-- Bootstrap core CSS -->
  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="./css/style.css" rel="stylesheet">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
<!-- 
  Tham khảo: 
  https://startbootstrap.com/templates/simple-sidebar/
  https://getbootstrap.com/docs/4.0/components/navbar/
 -->
  <div class="d-flex" id="wrapper" style="background-image: url('./images/bg4.jpg');background-repeat:repeat">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <a href="./index.html">
        <div class="sidebar-heading text-center">KARMA SHOP</div>
    </a>
      <div class="list-group list-group-flush">
        <!-- <img src="./images/giamdoc.jpg" width="150" alt="" class="img-fluid rounded-circle">
        <h3 class="text-light"><a class="text-link" href="index.html">Đỗ Tấn Lộc</a></h3>
        <div class="social-links mt-3 text-center">
          <a href="#" class="facebook"><img src="./images/fb.png" width="50" alt=""></a>
          <a href="#" class="facebook"><img src="./images/zalo.png" width="40" alt=""></a>
        </div> -->
        <a href="./panel/" class="list-group-item list-group-item-action bg-light text-danger">Bảng điều khiển</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Liên hệ</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Tổng quát</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Sự kiện</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Trang cá nhân</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Thông báo</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <!-- <button class="btn btn-primary" id="menu-toggle"></button> -->
        <img src="./images/logo.png" alt="" id="menu-toggle" class="navbar-branch">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="./index.html">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./shoesfind.php">Tìm Giày</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Chọn giày
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./sneaker.html">Giày Sneaker</a>
                <a class="dropdown-item" href="./addias.html">Giày Addias</a>
                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="./nike.html">Giày Nike</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#formDangKy" href="#">Đăng ký</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#formDangNhap" href="#">Đăng nhập</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="formDangKy">
                    <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Đăng ký</h2>
                                </div>
                                <div class="modal-body">
                                    <form class="modal-form" action="#">
                                        <div class="form-group">
                                            <label for="username"><span>*</span> Tên tài khoản:</label>
                                            <input type="username" class="form-control" placeholder="Nhập tên tài khoản" id="username">
                                            <!-- <p class="emailError"></p> -->
                                          </div>
                                        <div class="form-group">
                                          <label for="email"><span>*</span> Email:</label>
                                          <input type="email" class="form-control" placeholder="Nhập Email" id="email">
                                          <p class="emailError"></p>
                                        </div>
                                        <div class="form-group">
                                          <label for="pwd"><span>*</span> Mật khẩu:</label>
                                          <input type="password" class="form-control" placeholder="Nhập mật khẩu" id="pwd">
                                          <p class="passwordError"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd"><span>*</span> Nhập lại mật khẩu:</label>
                                            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" id="repwd">
                                            <p class="repasswordError"></p>
                                          </div>
                                        <!-- <div class="form-group form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> Ghi nhớ?
                                          </label>
                                        </div> -->
                                        <!-- <button type="submit" class="btn btn-primary" data-dismiss="modal">Thoát</button> -->
                                        <button type="submit" class="btn btn-dark">Đăng ký</button>
                                      </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 
      Tham khảo:
      https://getbootstrap.com/docs/4.0/components/modal/
     -->
    <!-- Modal đăng nhập -->
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="modal fade" id="formDangNhap">
                  <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h2>Đăng nhập</h2>
                              </div>
                              <div class="modal-body">
                                  <form action="#">
                                      <div class="form-group">
                                        <label for="email"><span>*</span> Tên tài khoản hoặc email:</label>
                                        <input type="username" class="form-control" placeholder="Nhập tên tài khoản hoặc email:" id="username">
                                      </div>
                                      <div class="form-group">
                                        <label for="pwd"><span>*</span> Mật khẩu:</label>
                                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" id="pwd">
                                      </div>
                                      <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> Ghi nhớ
                                                <a class="form-login-forgotpwd" href="./forgotpwd.html">
                                                    <span class="form-login-forgotpwd-text">Quên mật khẩu?</span>
                                                </a>
                                        </label>
                                      </div>
                                      <button type="submit" class="btn btn-dark">Đăng nhập</button>
                                    </form>
                              </div>
                          </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Tham khảo
        https://bootsnipp.com/snippets/93XX
    -->
    <div class="container">
        <!-- <h3>Nhập tìm kiếm giày của bạn ở đây</h3> -->
        <input class="form-control mb-4" id="tableSearch" type="text"
          placeholder="Nhập tìm kiếm giày của bạn ở đây" style="margin-left:-25px">
      
        <table class="table table-dark table-bordered table-striped" style="margin-left:-25px">
          <thead class="">
            <tr>
              <!--<th>Số thứ tự</th>               -->
              <th>Nhãn hiệu</th>
              <th>Tên giày</th>
              <th>Số lượng</th>
            </tr>
          </thead>
          <tbody id="myTable">
            <?php
            $sql = "SELECT id, branch, tensanpham, status FROM hienthidulieu";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            if($row["status"]==0) {
                echo "<tr><td>" . $row["branch"] . "</td><td>"
            . $row["tensanpham"]. "</td><td>" . $row["status"] . "</td></tr>";
            }
            else {
                echo "<tr><td>" . $row["branch"] . "</td><td>"
            . $row["tensanpham"]. "</td><td>" . $row["status"] . "</td></tr>";
            }
            }
            }
            echo "</tdoby>";
            $conn->close();
            ?>
          </tbody>
        </table>
      </div>
            <!-- Tham khảo
            https://codepen.io/michalwyrwa/pen/GBaPPj
      -->
      <button id="myBtn" title="Go to top">Đầu trang</button>
  <!-- Bootstrap core JavaScript -->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./js/toggle.js"></script>
</body>
</html>
