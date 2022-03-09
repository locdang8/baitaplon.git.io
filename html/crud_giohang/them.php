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
		<label for="">Mã sách</label>

		<input type="text" placeholder="Mã sách" name="masach">

		<label for="">Tên sách</label>

		<input type="text" placeholder="Tên sách" name="tensach">

		<label for="">Tên tác giả</label>

		<input type="text" placeholder="Tên tác giả" name="tentacgia">

		<label for="">Ngày xuất bản</label>

		<input type="date" name="ngayxuatban">

		<label for="">Số trang</label>

		<input type="text" placeholder="Số trang" name="sotrang">

		<label for="">Giới thiệu</label>

		<input type="text" placeholder="Giới thiệu" name="gioithieu">

		<label for="">Giá tiền</label>

		<input type="text" placeholder="Giá tiền" name="giatien">

		<label for="">Trạng thái</label>


		<select  name="trangthai">

	    		<option value="1">Còn hàng</option>

	    		<option value="0">Hết hàng</option>

  		</select>

		<!-- <input type="text" placeholder="Trạng thái" name="trangthai"> -->

		<label for="">Hình ảnh</label>

		<input type="file" name="hinhanh">

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
				"sach_id" => $_POST['masach'],

				"ten" => $_POST['tensach'],

				"tacgia" => $_POST['tentacgia'],

				"ngayxuatban" => $_POST['ngayxuatban'],

				"sotrang" => $_POST['sotrang'],

				"gioithieu" => $_POST['gioithieu'],

				"giatien" => doubleval($_POST['giatien']),

				"trangthai" => $_POST['trangthai'],

				"anh" => $hinhanhpath
			];
			
			$them = "INSERT INTO sach (sach_id, ten, tacgia, ngayxuatban, sotrang, gioithieu, giatien, trangthai, anh)
			VALUES (:sach_id, :ten, :tacgia, :ngayxuatban, :sotrang, :gioithieu, :giatien, :trangthai, :anh)";

			$stmt = $conn->prepare($them);

			$stmt->execute($myData);

			header("location: danhsachsach.php");

		} else {
			
		}

		$conn = null;

	?>

</body>
</html>