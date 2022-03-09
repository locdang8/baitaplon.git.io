<?php 
session_start();

if(isset($_SESSION['taikhoan']) && isset($_SESSION['matkhau'])) {
	session_destroy();
	echo "<script>location.href='login_admin.php'</script>";
} else {
	echo "<script>location.href='login_admin.php'</script>";
}
?>