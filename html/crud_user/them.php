<?php 

include 'header.php';

include '../connectDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<form class="card card__them"action="" method="POST" enctype="multipart/form-data">

		<!-- <label for="">Mã user</label>

		<input type="text" placeholder="Mã user" name="mauser"> -->

		<label for="">Tài khoản</label>

		<input type="text" placeholder="Tài khoản" name="taikhoan">

		<label for="">Mật khẩu</label>

		<input type="password" placeholder="Mật khẩu" name="matkhau">

		<label for="">Tên</label>

		<input type="text" placeholder="Tên" name="ten">

		<label for="">Địa chỉ</label>

		<input type="text" placeholder="Địa chỉ" name="diachi">

		<label for="">Số điện thoại</label>

		<input type="text" placeholder="Số điện thoại" name="sodienthoai">

		<label for="">Giới tính</label>

		<select name="gioitinh">
			
			<option value="1">Nam</option>

			<option value="0">Nữ</option>

		</select>

  		<button type="submit" name="submit">Lưu</button>

	</form>


	<?php 

		if(isset($_POST['submit'])) {

			$myData = [

				"taikhoan" => $_POST['taikhoan'],

				"matkhau" => $_POST['matkhau'],

				"ten" => $_POST['ten'],

				"diachi" => $_POST['diachi'],

				"sodienthoai" => $_POST['sodienthoai'],

				"gioitinh" => $_POST['gioitinh']
			];
			
			$them = "INSERT INTO user (taikhoan, matkhau, ten, diachi, sodienthoai, gioitinh)
			VALUES (:taikhoan, :matkhau, :ten, :diachi, :sodienthoai, :gioitinh)";

			$stmt = $conn->prepare($them);

			$stmt->execute($myData);

			header("location: danhsachuser.php");

		} else {
			
		}

		$conn = null;

	?>

</body>
</html>