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
    
    <div class="container__gt">
        <div class="grid">
            <p style="margin: 100px 10px;line-height: 2; font-size: 1.2rem;">Ngày này trong nhịp sống hối hả của con người thì việc giành thời gian để ra ngoài 
                để mua sắm trở nên là 1 điều quá xa sỉ.. Những lo lắng về giao thông không an toàn 
                và hạn chế trong việc mua hàng truyền thống có thể tránh được trong khi mua sắm trực
                tuyến. Với mua sắm trực tuyến(online), bạn cũng không cần phải lo lắng về điều kiện 
                thời tiết. Người tiêu dùng và các khách hàng là những tổ chức, công ty,… đang dần 
                chuyển sang mua sắm trực tuyến nhiều hơn nhằm tiết kiệm thời gian.
        
                Chính vì thế việc mua sắm online càng trở nên quan trọng và cần thiết,chỉ cần 1 cú 
                click chuột thì họ có thể có được sản phẩm mà mình mong muốn.Việc mua sắm online có 
                nhiều ưu điểm là có thể sở hữu mọi thứ thông qua các cú click chuột chứ không cần phải 
                đến tận nơi để mua hàng. Sau khi vào website bán hàng, chọn sản phẩm, chỉ cần đặt hàng 
                (order) người bán sẽ mang sản phẩm đến tận nhà bạn. Mua sắm online cho phép mua hàng bất 
                cứ khi nào bạn muốn. Các cửa hang trên mạng không bao giờ đóng cửa, có thể mua sắm 24/24 
                giờ và 7 ngày trong tuần. Mua sắm ở các chợ, trung tâm thương mại hay cửa hàng rất khó để 
                bạn có thể so sánh đặc điểm và giá của sản phẩm với nhau. Khi mua hàng online, bạn dễ dàng 
                so sánh và đưa ra lựa chọn sản phẩm phù hợp nhất. Đôi khi bạn gặp phải những người bán hàng 
                khó tính tại một số địa điểm bán hàng. Mua sắm online thì khách hàng chẳng phải để ý đến chuyện 
                ấy nữa.
            </p>
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
