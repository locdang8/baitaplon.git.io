<?php 

include 'header.php';

include '../connectDB.php';

$id = $_GET['id'];

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

			$sach_sql = "SELECT * FROM sach WHERE sach_id = '$id'";

			$stmt = $conn->prepare($sach_sql);

			$stmt->execute();

			$showSach = $stmt->fetchAll(PDO::FETCH_ASSOC);

			foreach ($showSach as $value) {
				// code...
		?>

		<label for="">Mã sách</label>

		<input type="text" placeholder="Mã sách" name="masach" value="<?php echo $value['sach_id'];?>" disabled>

		<label for="">Tên sách</label>

		<input type="text" placeholder="Tên sách" name="tensach" value="<?php echo $value['ten'];?>">

		<label for="">Tên tác giả</label>

		<input type="text" placeholder="Tên tác giả" name="tentacgia" value="<?php echo $value['tacgia'];?>">

		<label for="">Ngày xuất bản</label>

		<input type="date" name="ngayxuatban" value="<?php echo $value['ngayxuatban'];?>">

		<label for="">Số trang</label>

		<input type="text" placeholder="Số trang" name="sotrang" value="<?php echo $value['sotrang'];?>">

		<label for="">Giới thiệu</label>

		<input type="text" placeholder="Giới thiệu" name="gioithieu" value="<?php echo $value['sotrang'];?>">

		<label for="">Giá tiền</label>

		<input type="text" placeholder="Giá tiền" name="giatien" value="<?php echo $value['giatien'];?>">

		<label for="">Trạng thái</label>


		<input type="text" placeholder="Trạng thái" value="<?php

		if($value['trangthai'] == 1) {

			echo "Còn hàng";

		} else {

			echo "Hết hàng";

		}
		?>" disabled>

		<select  name="trangthai">

	    		<option value="1">Còn hàng</option>

	    		<option value="0">Hết hàng</option>

  		</select>

		

		<label for="">Hình ảnh</label>

		<input type="file" name="hinhanh">

		<?php }?>

		<button type="submit" name="submit">Submit</button>

	</form>

	<?php 

		if(isset($_POST['submit'])) {

			// lấy địa chỉ của file ảnh
			$target_dir = "../uploads/";

			$hinhanhpath = basename($_FILES['hinhanh']['name']);

			$target_file = $target_dir . $hinhanhpath;

			$uploadOk = 1;


			// biến này để kiểm tra có phải là file ảnh không
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


			// kiểm tra đuôi file ảnh
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {

  				echo "Xin lỗi, chỉ cho phép các tệp JPG, JPEG, PNG & GIF.";

  				$uploadOk = 0;

			}

			if ($uploadOk == 0) {

  				echo "Xin lỗi, tệp của bạn không được tải lên.";
				// if everything is ok, try to upload file
			} else {
				// kiểm tra xem file ảnh đc upload chưa 
  				if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {

   					echo "Tập tin ". htmlspecialchars( $hinhanhpath). " đã được tải lên.";

  				} 
  				else {

   				 	echo "Xin lỗi, đã xảy ra lỗi khi tải tệp của bạn lên.";
  					}
			}

			$myData = [
				// "sach_id" => $_POST['masach'],

				"ten" => $_POST['tensach'],

				"tacgia" => $_POST['tentacgia'],

				"ngayxuatban" => $_POST['ngayxuatban'],

				"sotrang" => $_POST['sotrang'],

				"gioithieu" => $_POST['gioithieu'],

				"giatien" => doubleval($_POST['giatien']),

				"trangthai" => $_POST['trangthai'],

				"anh" => $hinhanhpath
			];
			
			$them = " UPDATE sach SET ten = :ten,
			tacgia =  :tacgia,
			ngayxuatban = :ngayxuatban,
			sotrang = :sotrang,
			gioithieu = :gioithieu,
			giatien = :giatien,
			trangthai = :trangthai,
			anh = :anh
			WHERE sach_id = '$id'";

			$stmt = $conn->prepare($them);

			$stmt->execute($myData);

			header("location: danhsachsach.php");

		} else {
			
		}

		$conn = null;

	?>

</body>
</html>