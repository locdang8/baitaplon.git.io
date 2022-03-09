<?php 

include '../connectDB.php';

include 'header.php';

$id = $_GET['id'];

echo $id;

$xoa = "DELETE FROM giohang WHERE id ='$id'";

$stmt = $conn->prepare($xoa);

$stmt->execute();

header("location: danhsachgiohang.php");

?>