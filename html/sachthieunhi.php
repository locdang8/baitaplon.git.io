<?php 

    include 'header_trangchu.php';

    // if(isset($_SESSION['taikhoan'])) {

    //     echo "<script>alert('".$_SESSION['taikhoan']."')</script>";

    // } 

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
    <title>Document</title>
</head>
<body>
    <!-- Phần heder------------------------------------------------ -->


    <!-- sản phẩm------------------------ -->
    <!-- -------------------------------- -->
    <div class="app-container">
        <div class="app-container-main">
            <div class="grid">
                <div class="grid__row app-content">
                    <div class="grid__col-2 col-menu">
                        <div class="category-menu">
                            <ul class="category-menu__list">
                                <li class="category-menu__list-item">
                                    <a href="#" class="category-menu__list-item-link">Sách thiếu nhi</a>
                                    <ul class="category-menu__extends">
                                        
                                        <li class="category-menu__extends-item"> <a href="">Truyện tranh</a> </li>
                                        <li class="category-menu__extends-item"> <a href="">Sách khoa học cho trẻ em</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Sách rèn luyện kỹ năng</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Mỹ thuật âm nhạc</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Sách ngoại ngữ</a> </li>

                                    </ul>       
                                </li>
                            </ul>
                            <ul class="category-menu__list">
                                <li class="category-menu__list-item">
                                    <a href="#" class="category-menu__list-item-link">Sách giáo khoa</a>
                                    <ul class="category-menu__extends">       
        
                                        <li class="category-menu__extends-item"><a href="">Sách giáo khoa</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Sách bài tập</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Sách tham khảo</a> </li>

                                    </ul>
                                </li>
                            </ul>
                            <ul class="category-menu__list">
                                <li class="category-menu__list-item">
                                    <a href="#" class="category-menu__list-item-link">Sách kinh tế</a>
                                    <ul class="category-menu__extends">
        
                                        <li class="category-menu__extends-item"><a href="">Quản trị và lãnh đạo</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Kinh tế tài chính</a> </li>      
                                        <li class="category-menu__extends-item"><a href="">Marketing và bán hàng</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Đầu tư và chứng khoán</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Nhân sự và việc làm</a> </li>
                                        
                                    </ul>
                                </li>
                            </ul>
                            <ul class="category-menu__list">
                                <li class="category-menu__list-item">
                                    <a href="#" class="category-menu__list-item-link">Sách chuyên ngành</a>
                                    <ul class="category-menu__extends">
        
                                        <li class="category-menu__extends-item"><a href="">Âm nhạc và nghệ thuật</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Khoa học kỹ thuật</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Công nghệ thông tin</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Du lịch</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Thể thao</a> </li>
                                        <li class="category-menu__extends-item"><a href="">Y học</a> </li>

                                    </ul>
                                </li>
                            </ul>
                            <ul class="category-menu__list">
                                <li class="category-menu__list-item">
                                    <a href="#" class="category-menu__list-item-link">Thường thức và đời sống</a>
                                    <ul class="category-menu__extends">
        
                                        <li class="category-menu__extends-item"> <a href="">Bí quyết làm đẹp</a></li>
                                        <li class="category-menu__extends-item"> <a href="">Hạnh phúc gia đình</a></li>
                                        <li class="category-menu__extends-item"> <a href="">Sách nấu ăn</a></li>
                                        <li class="category-menu__extends-item"> <a href="">Nuôi chồng</a></li>
                                        <li class="category-menu__extends-item"> <a href="">Sinh lý học</a></li>
                                        <li class="category-menu__extends-item"> <a href="">Tâm lý học</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid__col-10">
                        <div class="category-grid__head">
                            <div id="category-grid__head-title">
                                <p>Truyện tranh</p>
                            </div>
                            <div class="scan">
                                <div id="category-grid__head-filter">
                                    <button class="category-grid__head-btn"><span>Lọc sản phẩm</span> <i class="fas fa-sort-down"></i></button>
                                    <form  class="category-grid__head-filter-extend">
                                        <div class="category-grid__head-filter-extend-item">
                                            <label> Lứa tuổi: </label>
                                            <select name="" id="" class="category-grid__head-filter-extend-select">
                                                <option value="" class="category-grid__head-filter-extend-option">6+</option>
                                                <option value="" class="category-grid__head-filter-extend-option">12+</option>
                                                <option value="" class="category-grid__head-filter-extend-option">16+</option>
                                            </select>
                                        </div>
                                        <div class="category-grid__head-filter-extend-item">
                                            <label>Giá sách: </label>
                                            <select name="" id="" class="category-grid__head-filter-extend-select">
                                                <option value="" class="category-grid__head-filter-extend-option">nhỏ hơn 50.000</option>
                                                <option value="" class="category-grid__head-filter-extend-option">từ 50.000 đến 200.000</option>
                                                <option value="" class="category-grid__head-filter-extend-option">trên 200.000</option>
                                            </select>
                                        </div>
                                        <div class="category-grid__head-filter-extend-item">
                                                <label>Hình thức thanh toán: </label>
                                                <select name="" id="" class="category-grid__head-filter-extend-select">
                                                    <option value="" class="category-grid__head-filter-extend-option">Thanh toán bằng thẻ</option>
                                                    <option value="" class="category-grid__head-filter-extend-option">Thanh toán khi nhận hàng</option>
                                                </select>
                                        </div>
                                        <div class="category-grid__head-filter-extend-item">
                                            <button class="category-grid__head-filter-extend-submit">Lọc sản phẩm</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="category-grid__head-sort">
                                    <select class="category-grid__head-select">
                                        <option value="">Sắp xếp</option>
                                        <option value="">Từ cao đến thấp</option>
                                        <option value="">Từ thấp đến cao</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- grid san pham------------------------------------ -->
                        <div class="home-product">

                            <!-- Hàng sản phẩm thứ 1 ----------------------------->
                            
                            <div class="grid__row">
                                <?php 

                                // $sql = "SELECT * FROM sach";
                                $search_sql = '';

                                $search_name = '';

                                //tên thể loại
                           		$ten_the_loai = "Thiếu nhi";

                           		//the loai
                                $the_loai = "SELECT sach_id FROM theloaisach WHERE ten = '$ten_the_loai'";

                                $stmt = $conn->prepare($the_loai);

                                $stmt->execute();

                                $ketqua_theloai = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                $my_theloai = '';
                                foreach ($ketqua_theloai as $info_theloai) {
                                	// code...
                                	echo $info_theloai['sach_id'];

                                	$my_theloai = $info_theloai['sach_id'];
                                }

                                if(isset($_GET['timkiemtensach'])) {

                                    $search_name = $_GET['timkiemtensach'];
                                }

                                if(empty($search_name)) {

                                    $search_sql = "SELECT * FROM sach ";

                                } else {

                                     $search_sql =  "SELECT * FROM sach WHERE ten LIKE '%$search_name%'";
                                }

                                $stmt = $conn->prepare($search_sql);

                                $stmt->execute();

                                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($result as $value) {
                                    // code...
                            ?>
                            <div class="grid__col-2-4">
                                
                                <div class="home-product__item">
                                    
                                    <a href="chitietsp.php<?php echo '?id='.$value['sach_id'];?>">
                                        
                                        <img class="home-product__img" src="<?php echo './uploads/'.$value['anh']?>" alt="">

                                    </a>

                                    <h3 class="home-product__name"><?php echo $value['ten'];?></h4>

                                    <h4 class="home-product__name-tg"><?php echo $value['tacgia']?></h6>

                                    <div class="home-product__price">

                                        <span class="home-product__price-old"><?php echo $value['giatien'].'VND';?></span>

                                        <span class="home-product__price-new"><?php echo $value['giatien'].'VND';?></span>

                                    </div>

                                    <div class="home-product__favorite">

                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>

                                        <div class="home-product__sale-off">

                                            <span class="home-product__sale-off-percent">10%</span>

                                            <br>

                                            <span class="home-product__sale-off-label">GIẢM</span>

                                        </div>

                                </div>

                            </div>
                        <?php }?>
                            </div>

                        </div>
                    </div>                                       
                </div>
            </div>
        </div>
    </div>



<!-- -------------------FOOTER------------- --------------------------------------------------->
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