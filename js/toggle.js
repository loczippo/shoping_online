// Ẩn toggle
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
//   Chuyển slide carousel
$('.carousel').carousel({
    interval: 2800
  });
// Tra cứu giày
$(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

// top button
$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#myBtn').fadeIn();
			} else {
				$('#myBtn').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#myBtn').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});