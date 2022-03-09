<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bookstore'; 

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connect thanh cong";
} catch(PDOException $e) {
    echo $e->getMessage();
} 
?>