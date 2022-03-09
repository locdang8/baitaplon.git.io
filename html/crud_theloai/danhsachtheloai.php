<?php
include '../connectDB.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="../../fonts/faw/css/all.min.css">
		<title>Document</title>
	</head>
	<body>
		<div class="container">
			<table class="table table-inverse table-bordered text-center">
				<thead style="background-color: #000; color: #fff; font-weight: 500;">
					<tr>
						
						<th >Mã thể loại</th>
						<th >Tên thể loại</th>
						<th >Tên sách</th>
						<th >Tuỳ chọn</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$seachName = "";
					$searchSQL = "";
					if(isset($_GET['timkiemtheloai'])) {
					$searchName = $_GET['timkiemtheloai'];
					}
					if(empty($searchName)) {
					$searchSQL = "SELECT * FROM theloaisach";
					}
					else {
					$searchSQL = "SELECT * FROM theloaisach WHERE ten LIKE '%$searchName%'";
					}
					$stmt = $conn->prepare($searchSQL);
					$stmt->execute();
					$theloais= $stmt->fetchAll(PDO::FETCH_ASSOC);
					foreach ($theloais as $value) {
					// code...
					?>
					<tr>
						
						<td><?php echo $value['theloai_id']?></td>
						<td><?php echo $value['ten']?></td>
						<td><?php echo $value['sach_id']?></td>
						<td>
							
							<span><a href="sua.php<?php echo '?id='.$value['theloai_id'];?>"><i class="fas fa-edit"></i></a></span>
							<span><a href="xoa.php<?php echo '?id='.$value['theloai_id'];?>"><i class="fas fa-trash-alt"></i></a></span>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</body>
	</html>