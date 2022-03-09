<?php 

include 'header.php';

include '../connectDB.php';

$id = $_GET['id'];

// echo $id;
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

		<?php 

		$sql = "SELECT * FROM user WHERE id = '$id'";

		$stmt = $conn->prepare($sql);

		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($result as $value) {
			// code...

		?>

		<label for="">Tài khoản</label>

		<input type="text" placeholder="Tài khoản" name="taikhoan" value="<?php echo $value['taikhoan']?>">

		<label for="">Mật khẩu</label>

		<input type="password" placeholder="Mật khẩu" name="matkhau" value="<?php echo $value['matkhau']?>">

		<label for="">Tên</label>

		<input type="text" placeholder="Tên" name="ten" value="<?php echo $value['ten']?>">

		<label for="">Địa chỉ</label>

		<input type="text" placeholder="Địa chỉ" name="diachi" value="<?php echo $value['diachi']?>">

		<label for="">Số điện thoại</label>

		<input type="text" placeholder="Số điện thoại" name="sodienthoai" value="<?php echo $value['sodienthoai']?>">

		<label for="">Giới tính</label>

		<select name="gioitinh">
			
			<option value="<?php echo $value['gioitinh']?>">

				<?php

				 if($value['gioitinh'] == 0) {

				 	echo "Nữ";

				 } else {

				 	echo "Nam";
				 }

				 ?>
					
			</option>

			<option value="1">Nam</option>

			<option value="0">Nữ</option>

		</select>

	<?php }?>

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
			
			$them = "UPDATE user SET taikhoan = :taikhoan, matkhau = :matkhau, ten = :ten, diachi = :diachi, sodienthoai = :sodienthoai, gioitinh = :gioitinh WHERE id = '$id'";

			$stmt = $conn->prepare($them);

			$stmt->execute($myData);

			header("location: danhsachuser.php");

		} else {
			
		}

		$conn = null;

	?>

</body>
</html>