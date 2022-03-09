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

		<label for="">Mã thể loại</label>

		<input type="text" placeholder="Mã thể loại" name="matheloai">

		<label for="">Tên thể loại</label>

		<input type="text" placeholder="Tên thể loại" name="tentheloai">

		<label for="">Mã sách</label>


		<select  name="masach">

			<!-- phải select table sach để lấy id và tên sách -->

			<?php 

			$dataSach = "SELECT sach_id, ten FROM sach";

			$stmt = $conn->prepare($dataSach);

			$stmt->execute();

			$showSach = $stmt->fetchAll(PDO::FETCH_ASSOC);

			foreach ($showSach as $value) {
				// code...
			

			?>

	    		<option value="<?php echo $value['sach_id'];?>"><?php echo $value['ten'];?></option>

	    	<?php }?>

  		</select>

  		<button type="submit" name="submit">Lưu</button>

	</form>


	<?php 

		if(isset($_POST['submit'])) {

			$myData = [
				"theloai_id" => $_POST['matheloai'],

				"ten" => $_POST['tentheloai'],

				"sach_id" => $_POST['masach']
			];
			
			$them = "INSERT INTO theloaisach (theloai_id, ten, sach_id)
			VALUES (:theloai_id, :ten, :sach_id)";

			$stmt = $conn->prepare($them);

			$stmt->execute($myData);

			header("location: danhsachtheloai.php");

		} else {
			
		}

		$conn = null;

	?>

</body>
</html>