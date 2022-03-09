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

			$sach_sql = "SELECT * FROM hoadon WHERE hoadon_id = '$id'";

			$stmt = $conn->prepare($sach_sql);

			$stmt->execute();

			$showTheLoai = $stmt->fetchAll(PDO::FETCH_ASSOC);

			foreach ($showTheLoai as $value) {
				// code...
		?>

		<label for="">Mã hoá đơn</label>

		<input type="text" placeholder="Mã hóa đơn" name="mahoadon" value="<?php echo $value['hoadon_id'];?>" disabled>

		<label for="">Tên khách hàng</label>

		<input type="text" placeholder="Tên khách hàng" name="tenkhachhang" value="<?php echo $value['ten'];?>" disabled>

		<label for="">Địa chỉ</label>

		<input type="text" value="<?php echo $value['diachi'];?>" disabled>

		<label for="">Số điện thoại</label>

		<input type="text" value="<?php echo $value['sodienthoai'];?>" disabled>

		<label for="">Email</label>

		<input type="text" value="<?php echo $value['email'];?>" disabled>

		<label for="">Tổng tiền</label>

		<input type="text" value="<?php echo $value['tongtien'];?>" disabled>

		<label for="">Phương thức thanh toán</label>

		<input type="text" value="<?php echo $value['pttt'];?>" disabled>

		<label for="">Trạng thái vận đơn</label>

		<input type="text" value="<?php 

		if($value['trangthaivandon'] == 0) {

			echo "Chưa vận chuyển";

		} else { 
			
			echo "Đang vận chuyển";
		}
		 ;?>" 
		disabled>

		<select  name="trangthaivandon">

	    		<option value="1">Đang vận chuyển</option>

	    		<option value="0">Chưa vận chuyển</option>

  		</select>

	<?php }?>

		

  		<button type="submit" name="submit">Lưu</button>

	</form>


	<?php 

		if(isset($_POST['submit'])) {

			$myData = [
				
				"trangthaivandon" => $_POST['trangthaivandon']
			];
			
			$them = "UPDATE hoadon SET trangthaivandon = :trangthaivandon
			WHERE hoadon_id = '$id'";

			$stmt = $conn->prepare($them);

			$stmt->execute($myData);

			header("location: danhsachhoadon.php");

		} else {
			
		}

		$conn = null;

	?>

</body>
</html>