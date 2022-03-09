<?php 
session_start();
if(isset($_SESSION['taikhoan']) && isset($_SESSION['matkhau'])) {
	echo "<a href='admin.php' ><input type='button' name='back' value='back'></a>";
} else {
            // nếu kiểm tra taikhoan và matkhau không giống $username, $password
            echo "<script>alert('Sai tài khoản hoặc mật khẩu');</script>";

            echo "<script>location.href='login_admin.php'</script>";
        }
?>