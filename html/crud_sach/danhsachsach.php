<?php
include '../connectDB.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="../../fonts/faw/css/all.min.css">
	</head>
	<body>
		<div class="container">
			<table class="table table-inverse table-bordered text-center">
				<thead style="background-color: #000; color: #fff; font-weight: 500;">
					<tr>
						
						<th>Tên sách</th>
						<th>Tác giả</th>
						<th>Ngày xuất bản</th>
						<th>Giá tiền</th>
						<th>Ảnh</th>
						<th>Tùy chọn</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$searchName = "";
					$searchSQL = "";
					if(isset($_GET['timkiemtensach'])) {
						$searchName = $_GET['timkiemtensach'];
					}
					if(empty($searchName)) {
					
						$searchSQL = "SELECT * FROM sach";
					} else {
						$searchSQL = "SELECT * FROM sach WHERE ten LIKE '%$searchName%'";
					}
					$stmt = $conn->prepare($searchSQL);
					$stmt->execute();
						// đổ dữ liệu vào biến
					$sachs = $stmt->fetchAll(PDO::FETCH_ASSOC);
						foreach ($sachs as  $value) {
							// code...
					?>
					<tr >
						
						<td ><?php echo $value['ten']?></td>
						<td ><?php echo $value['tacgia']?></td>
						<td ><?php echo $value['ngayxuatban']?></td>
						<td ><?php echo $value['giatien']?></td>
						<td >
							<img src="<?php echo '../uploads/'.$value['anh']?>" alt="ảnh" style="width: 100px ;height=auto;">
							
						</td>
						<td >						
							<span><a href="sua.php<?php echo '?id='.$value['sach_id'];?>"><i class="fas fa-edit"></i></a></span>
							<span><a href="xoa.php<?php echo '?id='.$value['sach_id'];?>"><i class="fas fa-trash-alt"></i></a></span>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</body>
</html>