<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/header_admin.css">
	<link rel="stylesheet" href="../fonts/faw/css/all.min.css">
</head>
<body>

<div class="sidebar">

	<!-- Nút tắt -->
	<button class="sidebar__open"><p><i class="fas fa-times-circle"></i></p></button>

	<a><?php 

		if(isset($_SESSION['taikhoan'])) {

			// echo "Xin chào ".$_SESSION['taikhoan']." !!!";

		} else {
			echo "<script>alert('Sai tài khoản và mật khẩu');</script>";

			echo "<script>location.href='login_admin.php'</script>";
		}
	?></a>

	<!-- Danh sách các trang admin truy cập -->

	<a href="#" id="sanpham"><i class="fas fa-address-book" style="padding-right: 10px;"></i>Danh sách sản phẩm</a>

	<a href="#" id="theloai"><i class="fas fa-list-ol" style="padding-right: 10px;"></i>Danh sách thể loại</a>


	<a href="#" id="user"><i class="fas fa-users" style="padding-right: 10px;"></i> Danh sách user</a>


	<a href="#" id="hoadon"><i class="fas fa-shopping-cart" style="padding-right: 10px;"></i></i> Danh sách đơn mua</a>

	<a href="#" id="giohang"><i class="fas fa-shopping-cart" style="padding-right: 10px;"></i></i> Danh sách giỏ hàng</a>

	<a href="logout_admin.php">Logout</a>

</div>


<!-- Nút bật  -->
<div class="activeSideBar">

	<button class="activeSideBar__btn"><i class="fas fa-bars"></i></button>
</div>


<!-- Nơi hiển thị cách trang mình chọn -->
<div class="hienthi">
	
</div>

</body>

<script src="../js/sidebar.js"></script>

</html>