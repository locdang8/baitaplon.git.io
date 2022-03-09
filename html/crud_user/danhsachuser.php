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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="../../fonts/faw/css/all.min.css">
	</head>
	<body>
		<div class="container">
			<table class="table table-inverse table-bordered text-center">
				<thead style="background-color: #000; color: #fff; font-weight: 500;">
					<tr >
						
						<th>Tài khoản</th>
						<th>Mật khẩu</th>
						<th>Tên</th>
						<th>Địa chỉ</th>
						<th>Số điện thoại</th>
						<th>Giới tính</th>
						<th>Tùy chọn</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$seachName = "";
					$searchSQL = "";
					if(isset($_GET['timkiemuser'])) {
					$searchName = $_GET['timkiemuser'];
					}
					if(empty($searchName)) {
					$searchSQL = "SELECT * FROM user";
					}
					else {
					$searchSQL = "SELECT * FROM user WHERE ten LIKE '%$searchName%'";
					}
					$stmt = $conn->prepare($searchSQL);
					$stmt->execute();
					$tens= $stmt->fetchAll(PDO::FETCH_ASSOC);
					foreach ($tens as $value) {
					// code...
					?>
					<tr>
						
						<td><?php echo $value['taikhoan'];?></td>
						<td><?php echo $value['matkhau'];?></td>
						<td><?php echo $value['ten'];?></td>
						<td><?php echo $value['diachi'];?></td>
						<td><?php echo $value['sodienthoai'];?></td>
						<td><?php echo $value['gioitinh'];?></td>
						<td>
							
							<span><a href="sua.php<?php echo '?id='.$value['id'];?>"><i class="fas fa-edit"></i></a></span>
							<span><a href="xoa.php<?php echo '?id='.$value['id'];?>"><i class="fas fa-trash-alt"></i></a></span>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</body>
</html>