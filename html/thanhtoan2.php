<?php

    include 'connectDB.php';

    include 'header_trangchu.php';

    include 'thuvien.php';

    if(isset($_SESSION['taikhoan'])) {

        // echo "<script>alert('".$_SESSION['taikhoan']."')</script>";

    }

    // if()


?>

                       
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/base.css">
     <title>Website - Giỏ hàng</title>
 </head>
 <body>
    
 <!-- -------------------------Thanh toán---------------- -->
     <section class="payment">
        <div class="container">
            <div class="payment-top-wrap">
                <div class="payment-top">
                    <div class="payment-top-delivery payment-top-item">
                       <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="payment-top-adress payment-top-item">
                       <i class="fas fa-map-marker-alt "></i>
                    </div>
                    <div class="payment-top-payment payment-top-item">
                       <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
             </div>
        </div>
        <div class="container">
            <div class="cart__content row">
                <div class="cart__content-left">
                    <!-- <div class="payment-content__left-method-delivery">
                        <p style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment-content__left-method-delivery-item">
                            <input checked type="radio">
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div> -->
                    <!-- <div class="payment-content__left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p>
                        <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                        <form action="" method="post">
                        <div class="payment-content__left-method-payment-item">
                            <input name="method-payment" type="radio" value="0">
                            <label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                        </div>
                        <div class="payment-content__left-method-payment-item-img">
                            <img src="image/visa.png" alt="">
                        </div>
                        <div class="payment-content__left-method-payment-item">
                            <input checked name="method-payment" type="radio" value="1">
                            <label for=""> Thanh toán bằng thẻ ATM(OnePay)</label>
                        </div>
                        <div class="payment-content__left-method-payment-item-img">
                            <img src="image/vcb.png" alt="">
                        </div>
                        <div class="payment-content__left-method-payment-item">
                            <input name="method-payment" type="radio" value="2">
                            <label for="">  Thanh toán Momo</label>
                        </div>
                        <div class="payment-content__left-method-payment-item-img">
                            <img src="image/momo.png" alt="">
                        </div>
                        <div class="payment-content__left-method-payment-item">
                            <input name="method-payment" type="radio" value="3">
                            <label for="">  Thu tiền tận nơi</label>
                        </div>
                        </form>
                    </div> -->

                    <table class="cart__content-left-table">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Tác giả</th>
                        <th>SL</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php showGioHang2();?>
    
                </table>
    
                </div>
                <div class="payment-content__right">
                    <div class="payment-content__right-button">
                        <input type="text" placeholder="Mã giảm giá/Quà tặng">
                        <button><i class="fas fa-check"></i></button>
                    </div>
                    <div class="payment-content__right-button">
                        <input type="text" placeholder="Mã cộng tác viên">
                        <button><i class="fas fa-check"></i></button>
                    </div>
                    <div class="payment-content__right-mnv">
                        <select name="" id="">
                            <option value="">Chọn mã nhân viên thân thiết</option>
                            <option value="">D345</option>
                            <option value="">A345</option>
                            <option value="">E365</option>
                            <option value="">I345</option>
                        </select>
                    </div>
                </div>
            </div>
            <form action="giaohang.php" method="post">
            <div class="payment-content__right-payment">
                <input type="submit" name="tieptucthanhtoan" value="TIẾP TỤC THANH TOÁN">
            </div>
            </form>
        </div>
    </section>    
 <!-- -------------------------Footer -->
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


<script src="script.js"></script>

</body>
</html>                      