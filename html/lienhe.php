<?php 

    include 'header_trangchu.php';

    if(isset($_SESSION['taikhoan'])) {

        // echo "<script>alert('".$_SESSION['taikhoan']."')</script>";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/base.css">
    <title>Trang chủ BookShop</title>
</head>
<body>
    
    <div class="contact">
        <div class="grid">
            <div class="contact__maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.8774554135052!2d106.69218831492695!3d20.836654399684566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a9c2ee478df%3A0x6039ffe1614ede5c!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIw6BuZyBo4bqjaSBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1635904287847!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact__infor">
                <h3>Địa chỉ: <span class="contact__infor-address">484 Lạch Tray, Đổng Quốc Bình, Lê Chân, Hải Phòng</span></h3>
                <div class="contact__infor-mxh">
                    <ul>
                        <li class="contact__infor-mxh-item">Facebook: <a href=""></a></li>
                        <li class="contact__infor-mxh-item">Twitter: <a href=""></a></li>
                        <li class="contact__infor-mxh-item">Instagram: <a href=""></a></li>
                    </ul>
                </div>
                <div class="contact__infor-mem">
                    <div class="contact__infor-mem-item">
                        <ul>
                            <li>Tên: </li>
                            <li>SDT: </li>
                            <li>Email: </li>
                            <li>Chức vụ: </li>
                        </ul>
                    </div>
                    <div class="contact__infor-mem-item">
                        <ul>
                            <li>Tên: </li>
                            <li>SDT: </li>
                            <li>Email: </li>
                            <li>Chức vụ: </li>
                        </ul>
                    </div>
                    <div class="contact__infor-mem-item">
                        <ul>
                            <li>Tên: </li>
                            <li>SDT: </li>
                            <li>Email: </li>
                            <li>Chức vụ: </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- -------------------------------- -->
    <footer class="footer">
        <section class="footer-app">
            <p>Tải ứng dụng BookShop</p>
            <div class="app-google">
                <img src="../images/appstore.jpg" alt="" class="app-google__img">
                <img src="../images/googleplay.jpg" alt="" class="app-google__img">
            </div>
            <p>Nhận thông báo từ chúng tôi</p>
            <input type="text" placeholder="Nhập email của bạn...">
        </section>
        <div class="footer-top">
            <li class="footer-top__item"><a href="" class="footer__item-link">Liên hệ</a></li>
            <li class="footer-top__item"><a href="" class="footer__item-link">Tuyển dụng</a></li>
            <li class="footer-top__item"><a href="" class="footer__item-link">Giới thiệu</a></li>
            <li class="footer-top__item">
                <a href="www.facebook.com" class="footer__item-icon fab fa-facebook"></a>
                <a href="" class="footer__item-icon fab fa-twitter"></a>
                <a href="" class="footer__item-icon fab fa-youtube"></a>
            </li>
        </div>
        <div class="footer__infor">
            <span>
                Công ty TNHH 3 thành viên Vmu với số đăng ký kinh doanh: 01234556 <br>
                Địa chỉ đăng ký: Lạch Tray Lê Chân Hải Phòng - 024376786986 <br>
                Tư vấn qua số điện thoại: <span class="footer__infor-phone">025695 587689</span>
            </span>
        </div>
        <br>
        <div class="footer__bottom">
            @DANGVANLOC78722
        </div>
    </footer>
</body>
<script src="../js/main.js">
</script>
</html>