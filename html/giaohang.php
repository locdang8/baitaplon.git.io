<?php 

    include 'connectDB.php';

    include 'header_trangchu.php';

    include 'thuvien.php';

    if(isset($_SESSION['taikhoan'])) {

        // echo "<script>alert('".$_SESSION['taikhoan']."')</script>";

    }
    else {
        echo "<script>location.href='login.php'</script>";
    }

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
    
 <!-- -------------------------cart---------------- -->
 <section class="delivery">
    <div class="container">
    <div class="delivery__top-wrap">
       <div class="delivery__top-list">
           <div class="delivery__top-delivery delivery__top-item">
              <i class="fas fa-shopping-cart"></i>
           </div>
           <div class="delivery__top-adress delivery__top-item">
              <i class="fas fa-map-marker-alt "></i>
           </div>
           <div class="delivery__top-payment delivery__top-item">
              <i class="fas fa-money-check-alt"></i>
           </div>
       </div>
    </div>
    <div class="container">
         <div class="delivery-content row">
             <div class="delivery-content__left">

                <p>Thông tin khách hàng</p>

                <table>

                    <tr>

                        <th>Tên khách hàng</th>

                        <th>Địa chỉ</th>

                        <th>Số điện thoại</th>

                        
                        <th>Trạng thái vận đơn</th>

                    </tr>

                    <?php 

                        $user_id = $_SESSION['user_id'];

                        $select_hoa_don = "SELECT ten, diachi, sodienthoai, trangthaivandon FROM hoadon WHERE user_id = '$user_id' ORDER BY hoadon_id DESC LIMIT 1";

                        $stmt = $conn->prepare($select_hoa_don);

                        $stmt->execute();

                        $ketqua_hoa_don = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($ketqua_hoa_don as $info_hoa_don) {
                            // code...

                    ?>

                    <tr>

                        <td><?php echo $info_hoa_don['ten']?></td>

                        <td><?php echo $info_hoa_don['diachi']?></td>

                        <td><?php echo $info_hoa_don['sodienthoai']?></td>

                        <td><?php  if($info_hoa_don['trangthaivandon'] == 1) {

                            echo "Đang vận chuyển tới".$info_hoa_don['diachi'];
                        } else {
                            echo "Chưa vận chuyển";
                        }?></td>

                    </tr>

                    <?php }?>

                </table>
                <!-- <p style="margin-bottom: 10px;">Vui lòng chọn địa chỉ giao hàng</p>
                <div class="delivery-content__left-login row">
                    <i class="fas fa-sign-in-alt"></i>
                    <p>Đăng nhập (Nếu bạn đã có tài khoản)</p>
                </div>
                <div class="delivery-content__left-noacount row">
                    <input checked name="loaikhach" type="radio" >
                    <p> <span style="font-weight: bold;">Mua hàng không cần tài khoản</span> (Nếu bạn không muốn lưu lại thông tin)</p>
                </div>
                <div class="delivery-content__left-signup row">
                    <input  name="loaikhach" type="radio" >
                    <p> <span style="font-weight: bold;">Đăng ký</span> (Tạo mới tài khoản với thông tin bên dưới)</p>
                </div>
                <div class="delivery-content__left-input-top row">
                    <div class="delivery-content__left-input-top-item">
                        <label for="">Họ tên <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content__left-input-top-item">
                        <label for="">Điện thoại <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content__left-input-top-item">
                        <label for="">Tỉnh/Tp <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content__left-input-top-item">
                        <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                </div>
                <div class="delivery-content__left-input-bottom">
                    <label for="">Địa chỉ <span style="color: red;">*</span></label>
                    <input type="text">
                </div>
              <div class="delivery-content__left-button row">
                <a href="giohang2.php"><span>«</span><p>Quay lại giỏ hàng</p></a>
                <button><p style="font-weight: bold;"><a href="trangthaigiaohang.php">THANH TOÁN VÀ GIAO HÀNG</a></p></button>
              </div> -->
             </div>
             <div class="delivery-content__right">
                <?php showTongTien();?>
                <!-- <table>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <tr>
                        <td>Học sinh chân kinh tập 25</td>
                        <td>-6%</td>
                        <td>1</td>
                        <td><p>26.000 <sup>VND</sup></p></td>
                    </tr>
                    <tr>
                        <td>Học sinh chân kinh tập 25</td>
                        <td>-6%</td>
                        <td>1</td>
                        <td><p>26.000 <sup>VND</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng</td>
                        <td style="font-weight: bold;"><p>52.000 <sup>VND</sup></p></td>
                    </tr>
                    <tr>
                       <td style="font-weight: bold;" colspan="3">Thuế VAT</td>
                       <td style="font-weight: bold;"><p>9.000 <sup>VND</sup></p></td>
                   </tr>
                   <tr>
                       <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                       <td style="font-weight: bold;"><p>61.000 <sup>VND</sup></p></td>
                   </tr> -->
                <!-- </table> -->
           </div>
         </div>
    </div>
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
</section>