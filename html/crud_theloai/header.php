<?php 

session_start();

if(isset($_SESSION['taikhoan'])) {

	// echo $_SESSION['taikhoan'];
} else {

	echo "<script>alert('Sai tài khoản và mật khẩu');</script>";
	
	echo "<script>location.href='../login_admin.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../crud_sach/style.css">
</head>
<body>
	<!-- Bắt đầu header -->
	<header>
		<!-- tiêu đề của trang -->
		<div style="width: 100%; text-align: center; font-style: italic;">Danh sách thể loại</div>

		<!-- Thanh tìm kiếm -->
		<nav class="nav__menu">

			<ul class="nav__menu__list">

				<li><a href="them.php" target="_self" > <button class="nav__menu__list-btn">Thêm thể loại</button></a></li>

				<li>

					<form action="danhsachtheloai.php" method="GET">

						<input class="nav__menu__timkiem" type="text" name="timkiemtheloai" placeholder="Nhập tên thể loại">

					</form>

				</li>

			</ul>

		</nav>

	</header>
</body>
</html>