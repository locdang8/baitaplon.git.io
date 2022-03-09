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
						
						<th >Mã hoá đơn</th>
						<th >Tên khách hàng</th>
						<th >Địa chỉ</th>
						<th >Số điện thoại</th>
						<th>Email</th>
						<th>Tổng tiền</th>
						<th>Phương thức thanh toán</th>
						<th>Trạng thái</th>
						<th>Tùy chọn</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$seachName = "";
					$searchSQL = "";
					if(isset($_GET['timkiemhoadon'])) {
					$searchName = $_GET['timkiemhoadon'];
					}
					if(empty($searchName)) {
					$searchSQL = "SELECT * FROM hoadon";
					}
					else {
					$searchSQL = "SELECT * FROM hoadon WHERE ten LIKE '%$searchName%'";
					}
					$stmt = $conn->prepare($searchSQL);
					$stmt->execute();
					$theloais= $stmt->fetchAll(PDO::FETCH_ASSOC);
					foreach ($theloais as $value) {
					// code...
					?>
					<tr>
						
						<td><?php echo $value['hoadon_id']?></td>
						<td><?php echo $value['ten']?></td>
						<td><?php echo $value['diachi']?></td>
						<td><?php echo $value['sodienthoai']?></td>
						<td><?php echo $value['email']?></td>
						<td><?php echo $value['tongtien']?></td>
						<td><?php echo $value['pttt']?></td>
						<td><?php if($value['trangthaivandon'] == 0) {echo "Chưa vận chuyển";} else {
							echo "Đang vận chuyển";}?></td>
						<td>
							
							<span><a href="sua.php<?php echo '?id='.$value['hoadon_id'];?>"><i class="fas fa-edit"></i></a></span>
							<span><a href="xoa.php<?php echo '?id='.$value['hoadon_id'];?>"><i class="fas fa-trash-alt"></i></a></span>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</body>
	</html>