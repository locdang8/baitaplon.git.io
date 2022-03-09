<?php 
// session_start();

include 'connectDB.php';
include 'header_admin.php';


    if(isset($_SESSION['taikhoan'])) { // nếu session này có sẵn

} else {
            // nếu kiểm tra taikhoan và matkhau không giống $username, $password
            echo "<script>alert('Sai tài khoản hoặc mật khẩu');</script>";

            echo "<script>location.href='login_admin.php'</script>";
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
    <header>
        <img src="" alt="">
        <nav class="nav">
            <ul>
                <li></li>
                <li></li>
                <li></li>                    
            </ul>
        </nav>
    </header>
    <div class="container"></div>
    <footer></footer>
</body>
</html>