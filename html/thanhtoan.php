<?php

    include 'connectDB.php';

    include 'header_trangchu.php';

    include 'thuvien.php';

    if(isset($_SESSION['taikhoan'])) {

        // echo "<script>alert('".$_SESSION['taikhoan']."')</script>";

    }

    //Lấy thông tin khách hàng qua tài khoản và mật khẩu get Session

    // $infoUser = '';

    // if(isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {

    //     // echo "<script>alert('OK')</script>";

    //     // Lấy data khách hàng thông qua session id user sau đó dùng sql để truy vấn dữ liệu

    //     $user_id = $_SESSION['user_id'];

    //     $userSQL = "SELECT * FROM user WHERE id = '$user_id'";

    //     $stmt = $conn->prepare($userSQL);

    //     $stmt->execute();

    //     $thongtinkhachhang = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //     foreach ($thongtinkhachhang as $infoUser) {
    //         // code...

    //     }

    //     $tongtien = tongdonhang();

    //     echo $tongtien;

    //     // kết thúc truy vấn

    //     // method-payment
    //      // lưu giá trị phương thức thanh toán
    //     $pttt = 0;
        
    //     if(isset($_POST['method-payment']) && ($_POST['method-payment'])) {

    //         $pttt = $_POST['method-payment'];
    //     }

    //     $my_data_hoadon = [

    //         // id user

    //         // $_SESSION['user_id'],

    //         //tên
    //         $infoUser['ten'],

    //         //địa chỉ
    //         $infoUser['diachi'],

    //         // số điện thoại
    //         $infoUser['sodienthoai'],

    //         //email
    //         $infoUser['email'],

    //         // tổng tiền
    //         $tongtien,

    //         // phương thức thanh toán
    //         $pttt
    //     ];

    //     //tạo hóa đơn mới trả về id cuối cùng
    //     $hoadon_id = taohoadon($my_data_hoadon);
    // }

    //     // tổng tiền = số lượng * giá tiền 
        


    //     // ấn nút tieptucthanhtoan lưu giá trị giỏ hàng vào table giohang

    //     if(isset($_POST['tieptucthanhtoan']) && ($_POST['tieptucthanhtoan'])) {
    //     // thêm giữ liệu vào giỏ hàng
    //         for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 

    //             $my_Gio_Hang = [
    //                 // user_id
    //                 $_SESSION['user_id'],

    //                 // sach_id
    //                 $_SESSION['giohang'][$i][5],

    //                 //soluong
    //                 $_SESSION['giohang'][$i][3],

    //                 //giatien
    //                 $_SESSION['giohang'][$i][4],

    //                 //tongtien
    //                 $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4],

    //                 //anh
    //                 $_SESSION['giohang'][$i][0],

    //                 //hoadon_id
    //                 $hoadon_id
    //             ];

    //             taogiohang($my_Gio_Hang);

    //         }
    //     }
    if(isset($_SESSION['pttt'])) {

        echo "<script>alert('".$_SESSION['pttt']."')</script>";        

    }

    $user_id = $_SESSION['user_id'];

    //$last_id
    $last_id = 0;

    if(isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {

        //tổng tiền sản phẩm

        //lấy dữ liệu khách hàng

        $sql = "SELECT * FROM user WHERE id  ='$user_id'";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $thongtinkhachhang = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($thongtinkhachhang as $inforUser) {
            // code...
            $ten = $inforUser['ten'];

            $diachi = $inforUser['diachi'];

            $sodienthoai = $inforUser['sodienthoai'];

            $email = $inforUser['email'];

        }

        // tổng tiền
        $tongtien = tongdonhang();

        //Phương thức thanh toán
        $pttt = "Thanh toán khi nhận hàng";


        // if(isset($_POST['method-payment']) && ($_POST['method-payment'])) {
        //     $pttt = $_POST['method-payment'];
        // }

        //dữ liệu cần có để thêm vào table hóa đơn

        $my_data_hoa_don = [

            'ten' => $ten, 

            'diachi' => $diachi, 

            'sodienthoai' => $sodienthoai, 

            'email' => $email, 

            'tongtien' => $tongtien, 

            'pttt' =>  $pttt
        ];


        // lưu thông tin vào table hóa đơn
        // table hoadon: 
        // hoadon_id, 
        //ten, 
        //diachi, 
        //sodienthoai,
        //email
        // tongtien
        //pttt (Phương thức thanh toán)


        $add_hoa_don = "INSERT INTO hoadon(ten, diachi, sodienthoai, email, tongtien, pttt)
        VALUES (:ten, :diachi, :sodienthoai, :email, :tongtien, :pttt)";

        $stmt = $conn->prepare($add_hoa_don);

        $stmt->execute($my_data_hoa_don);

        // lấy id cuối của bảng hóa đơn
        $last_id = $conn->lastInsertId();
        
    }

    if(isset($_POST['tieptucthanhtoan']) && ($_POST['tieptucthanhtoan'])) {

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            // code...

            $hinhanh = $_SESSION['giohang'][$i][0];

            $tensp = $_SESSION['giohang'][$i][1];

            $tacgia = $_SESSION['giohang'][$i][2];

            $soluong = $_SESSION['giohang'][$i][3];

            $giatien = $_SESSION['giohang'][$i][4];

            $tongtien = $soluong * $giatien;

            $insertGioHang = "INSERT INTO giohang (soluong, giatien, tongtien, anh, hoadon_id)
            VALUES ('$soluong', '$giatien', '$tongtien', '$hinhanh', '$last_id')";

            $conn->exec($insertGioHang);
        }

        header("location: giaohang.php");
            
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
            <div class="payment-content row">
                <div class="payment-content__left">
                    <div class="payment-content__left-method-delivery">
                        <p style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment-content__left-method-delivery-item">
                            <input checked type="radio">
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div>
                    <div class="payment-content__left-method-payment">
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
                    </div>
    
                </div>
                <div class="payment-conten__right">
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
            <form action="" method="post">
            <div class="payment-content__right-payment">
                <!-- <button><a href="./giaohang.php">TIẾP TỤC THANH TOÁN</a></button> -->
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