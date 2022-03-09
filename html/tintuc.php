<?php 

    include 'header_trangchu.php';

    if(isset($_SESSION['taikhoan'])) {

        echo "<script>alert('".$_SESSION['taikhoan']."')</script>";

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
    
    <div class="grid">
        <div class="news">
            <div class="news__left">
                <div class="news__left-item-top">
                    <div class="news__left-item-top-left">
                        <a href="https://thanhuytphcm.vn/tin-tuc/nha-van-nguyen-nhat-anh-ra-mat-tac-pham-moi-1491871594">
                            <img src="https://images.hcmcpv.org.vn/res/news/2020/11/10-11-2020-nha-van-nguyen-nhat-anh-ra-mat-tac-pham-moi-19B4111B-details.jpg?vs=10112020031758" alt="" class="news__left-item-top-left-img">
                        </a>
                        <h3 class="news__left-item-top-left-title">Nhà văn Nguyễn Nhật Ánh ra mắt sách mới</h3>
                        <p class="news__left-item-top-left-text">Sau 20 năm, nhà văn Nguyễn Nhật Ánh mới trở lại bối cảnh Sài Gòn - TPHCM trong tác phẩm của mình – truyện dài Con chim xanh biếc bay về, tác phẩm mới nhất được nhà văn viết trong năm 2020 đầy biến động, sẽ chính thức đến với bạn đọc toàn quốc vào ngày 11/11.</p>
                        <div class="news__left-item-top-left-extends">
                            <ul>
                                <li class="news__left-item-top-left-item">
                                    <a href="https://www.qdnd.vn/giao-duc-khoa-hoc/cac-van-de/kien-nghi-dua-sach-giao-khoa-vao-danh-muc-mat-hang-thiet-yeu-668646" class="news__left-item-top-left-link">Kiến nghị đưa sách giáo khoa vào danh mục mặt hàng thiết yếu</a>
                                </li>
                                <li class="news__left-item-top-left-item">
                                    <a href="https://www.britishcouncil.vn/hoc-tieng-anh/tieng-anh-nguoi-lon/kinh-nghiem/nhung-website-tin-tuc-giup-ban-hoc-tot-tieng-anh" class="news__left-item-top-left-link">Những website tin tức giúp bạn học tốt tiếng Anh</a>
                                </li>
                                <li class="news__left-item-top-left-item">
                                    <a href="https://www.unicef.org/vietnam/vi/nh%E1%BB%AFng-c%C3%A2u-chuy%E1%BB%87n/c%C3%A1ch-h%E1%BB%8Dc-t%E1%BA%ADp-v%C3%A0-l%C3%A0m-vi%E1%BB%87c-t%E1%BA%A1i-nh%C3%A0" class="news__left-item-top-left-link">Cách học tập và làm việc tại nhà</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="news__left-item-top-right">
                        <h3 style="width:100%; background-color: var(--pricl); height: 2rem; text-align: center;">Tin mới</h3>
                        <ul>
                            <li><a href="https://zingnews.vn/khoi-day-tri-tue-tam-hon-cho-tre-post1273612.html">Bộ sách của vợ chồng chuyên gia thần kinh học Kubota Kayoko nêu lý thuyết và phương pháp cụ thể để bồi đắp tâm hồn, rèn luyện trí tuệ cho trẻ.</a></li>
                            <li><a href="https://zingnews.vn/nghien-cuu-moi-ve-chu-quyen-va-loi-ich-quoc-gia-post1273907.html">Nghiên cứu mới về chủ quyền và lợi ích quốc gia, Cuốn sách đem đến nhiều diễn giải, nhận thức khoa học mới về ý thức chủ quyền và lợi ích quốc gia.</a></li>
                            <li><a href="https://zingnews.vn/cac-tac-gia-chung-tay-ung-ho-tre-em-kho-khan-vi-covid-19-post1274349.html">Nhà văn Nguyễn Nhật Ánh, Nuage Rose, Liêu Hà Trinh, họa sĩ Đỗ Hoàng Tường đã dành nhuận bút của mình để ủng hộ quỹ vaccine hay trẻ em gặp khó khăn do Covid-19.</a></li>
                            <li><a href="https://zingnews.vn/nghi-thuc-hau-dong-trong-nghien-cuu-cua-hoc-gia-phap-post1274183.html">Nghi thức hầu đồng và tín ngưỡng thờ Mẫu được thực hành và lưu truyền từ lâu trong dân gian, trải qua nhiều thăng trầm lịch sử. Năm 2016, thực hành tín ngưỡng thờ Mẫu Tam phủ của người Việt được UNESCO công nhận là di sản văn hóa phi vật thể của nhân loại.</a></li>
                            <li><a href="https://zingnews.vn/day-con-tai-chinh-huong-tre-su-dung-tien-hop-ly-post1273663.html">Với các bậc cha mẹ, giải đáp những câu hỏi của con trẻ là việc làm thường xuyên khi các bé đang ở độ tuổi tò mò, muốn khám phá thế giới xung quanh. Có những câu hỏi của con làm khó cả phụ huynh. Những vấn đề về tiền và cách chi tiêu hợp lý là một trong số đó.</a></li>
                            <li><a href="https://zingnews.vn/suc-hap-dan-trong-cau-chuyen-ve-nhung-doi-giay-cho-thieu-nhi-post1274368.html">Kể chuyện vượt lên nghịch cảnh khiến trẻ em cảm thấy được tôn trọng, gửi thông điệp về tình yêu thương… là cách bộ sách “Shoe Books” chinh phục bạn đọc nhiều thế hệ.</a></li>
                        </ul>
                        <h3 style="width:100%; background-color: #fff; height: 2rem; text-align: center;"><a href="">Xem tiếp</a></h3>
                    </div>
                </div>
                <div class="news__left-item-midle">
                    <div class="news__left-item-midle-item">
                        <a href="https://topreview.vn/giao-duc-dao-tao/sach-va-tri-thuc/top-10-quyen-sach-hay-ve-kinh-doanh/">
                            <img src="https://www.sachmoi.net/wp-content/uploads/2017/09/9-cuon-sach-kinh-doanh-se-lam-thay-doi-hoan-toan-tu-duy-cua-ban.jpg" alt="">
                        </a>
                    </div>
                    <div class="news__left-item-midle-item">
                        <a href="https://newshop.vn/tin-tuc/review-nhung-cuon-sach-kinh-doanh-hay-khong-the-bo-lo-id664.html">
                            <img src="https://newshop.vn/public/uploads/news/sach-kinh-doanh-hay-review-nhung-cuon-sach-kinh-doanh-hay-khong-the-bo-lo.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="news__left-item-bottom">
                    <div class="news__left-item-bottom-item"><iframe width="560" height="315" src="https://www.youtube.com/embed/nVztbNncPME" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div class="news__left-item-bottom-item"><iframe width="560" height="315" src="https://www.youtube.com/embed/c4-73dAzv8I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div class="news__left-item-bottom-item"><iframe width="560" height="315" src="https://www.youtube.com/embed/DbonCgmCHJY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
            </div>
            <div class="news__right">
                <div class="news__right-item">
                    <h3 style="width:100%; background-color: var(--pricl); height: 2rem; text-align: center;">Sách hay mỗi tuần</h3>
                    <iframe width="100%" height="215" src="https://www.youtube.com/embed/CKrxiZ8C_2I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="news__right-item" style="margin-top: 2rem;">
                    <h3 style="width:100%; background-color: var(--pricl); height: 2rem; text-align: center;">Những cuốn nên đọc 1 lần trong đời</h3>
                    <ul>
                        <li><a href="">Đắc nhân tâm -Dale Carnegie</a></li>
                        <li><a href="">Nhà giả kim -Paulo Coelho</a></li>
                        <li><a href="">Tội ác và hình phạt - Fyodor Dos</a></li>
                        <li><a href="">Mỗi lần vấp ngã là một lần trưởng thành</a></li>
                        <li><a href="">Tuổi trẻ đáng giá bao nhiêu - Rosie Nguyễn</a></li>
                        <li><a href="">Đời thay đổi khi chúng ta thay đổi -Andrew</a></li>
                        <li><a href="">Dạy con làm giàu -Robert Kiyosaki</a></li>
                        <li><a href="">Những tấm lòng cao cả -Edmondo</a></li>
                        <li><a href="">Cho tôi xin một vé đi tuổi thơ -Nguyễn Nhật Ánh</a></li>
                        <li><a href="">Harry Poster Jk Rowling</a></li>
                    </ul>
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
                <a href="" class="footer__item-icon fab fa-facebook"></a>
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