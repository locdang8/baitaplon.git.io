<?php 

include '../connectDB.php';

include 'header.php';

$id = $_GET['id'];

echo $id;

$xoa = "DELETE FROM hoadon WHERE hoadon_id ='$id'";

$stmt = $conn->prepare($xoa);

$stmt->execute();

header("location: danhsachhoadon.php");

?>