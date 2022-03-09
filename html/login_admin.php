<?php 
session_start();

include 'connectDB.php';

// tạo 2 biến lưu để lưu kết quả taikhoan và matkhau từ table admin
$username = ''; // biến này sẽ so sánh với $_POST['taikhoan']

$password = ''; // biến này sẽ so sánh với $_POST['matkhau']

// lấy data từ table admin
$sql = "SELECT * FROM admin";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as  $value) {

    $username = $value['taikhoan'];

    $password = $value['matkhau'];
}

// khi mà nhấn nút đăng nhập ta kiểm tra toàn bộ dữ liệu từ form và so sánh có đúng với $username ,$password 
if(isset($_POST['submit'])) {

        if($_POST['taikhoan'] == $username && $_POST['matkhau'] == $password ) {
            // nếu taikhoan và matkhau giống $username, $password
            $_SESSION['taikhoan'] = $username; // gán giá trị vào session

            $_SESSION['matkhau'] = $password; //gán giá trị vào session

            echo "<script>location.href='admin.php'</script>";
        } else {
            // nếu kiểm tra taikhoan và matkhau không giống $username, $password
            echo "<script>alert('Sai tài khoản hoặc mật khẩu');</script>";

            echo "<script>location.href='login_admin.php'</script>";
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login_admin.css">
</head>
<body>
    <div class="container">
        <div class="row row1">
            <div class="col col-left">
                <img class="col-left_img" src="../wallpaper/trees-and-flowers-bi.jpg" alt="">
            </div>
            <div class="col col-right">
                
                <form action="" method="POST" class="form">
                    <div class="form_containter">
                        <input type="text" name="taikhoan" placeholder="Tài khoản">
                        <input type="password" name="matkhau" placeholder="Mật khẩu">
                        <button type='submit' name='submit'>Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>