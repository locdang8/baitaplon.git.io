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
    <title>Document</title>
</head>
<body>
        
    <!-- Chi tiet san pham -------------------------------- -->
    <div class="grid">
        <sectiom class="product">
            <div class="product__container">
                <div class="product__container-top row">
                <?php 

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM sach WHERE sach_id = '$id'";

                    $stmt = $conn->prepare($sql);

                    $stmt->execute();

                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $value) {
                                    // code...
                    ?> 
                    <p><?php echo $value['ten']?></p>
                   

                </div>

                <div class="product__container-content">

                    <div class="product__content-left row">

                        <div class="product__content-left-big">
                        
                            <img class="product__content-left-big-img" src="<?php echo './uploads/'.$value['anh']?>" alt="">

                        </div>
                        <!-- <div class="product__content-left-small">
                            <img src="../images/sp1.jpg" alt="" class="product__content-left-small-img">
                            <img src="../images/sp1-small.jpeg" alt="" class="product__content-left-small-img">
                            <img src="../images/sp1-small2.png" alt="" class="product__content-left-small-img">
                            <img src="../images/smallsp1.jpg" alt="" class="product__content-left-small-img">
                        </div> -->
                    </div>
                    <div class="product__content-right row">
                        <div class="product__content-right-infor">
                            <ul class="product__content-right-infor-list">
                                <li class="product__content-right-infor-item">
                                    <h3 class="product__content-right-infor-title">
                                        <?php echo $value['ten'];?>
                                    </h3>
                                    <p>Tác giả: <span class="product__content-right-author"><?php echo $value['tacgia']?></span></p>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <span class="product__content-right-infor-price-new"><?php echo $value['giatien'].'VND'?></span>
                                    <p>Giá cũ: <span class="product__content-right-infor-price-old"><?php echo $value['giatien'].'VND'?></span></p>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <label>Tình trạng: </label>
                                    <span class="product__content-right-infor-status"><?php 
                                        if($value['trangthai'] == 0) {
                                            echo "Hết hàng";
                                        } else {
                                            echo "Còn hàng";
                                        }
                                    ?></span>
                                </li>
                                <!-- form gio hang -->
                                <form action="giohang2.php" method="POST">
                                    <li class="product__content-right-infor-item">
                                        <label>Số lượng</label>
                                        <input type="number" name="soluong" min="0" value="1" class="product__content-right-infor-sum">
                                    </li>
                                    <li class="product__content-right-infor-item buy">
                                        
                                            <i class="buy__addcart fas fa-cart-plus"><input class="product__content-right-infor-buy" type="submit" name="addcart" value="Thêm vào giỏ hàng" style="margin-left: 10px;"></i>
                                            
                                        
                                        <!-- <button class="product__content-right-infor-buy" type="submit" name="addcart">
                                            <i class="buy__addcart fas fa-cart-plus"></i>
                                            Thêm vào giỏ hàng
                                        </button> -->
                                        <!-- <button class="product__content-right-infor-buy">
                                            <i class="buy__buynow fas fa-shopping-basket"></i>
                                        Mua ngay
                                        </button> -->
                                    </li>
                                    <input type="hidden" name="sach_id" value="<?php echo $value['sach_id']?>">
                                    <input type="hidden" name="hinhanh" value="<?php echo './uploads/'.$value['anh'];?>">
                                    <input type="hidden" name="tensp" value="<?php echo $value['ten']?>">
                                    <input type="hidden" name="tacgia" value="<?php echo $value['tacgia']?>">
                                    <input type="hidden" name="giatien" value="<?php echo $value['giatien']?>">
                                </form>
                                <!-- form gio hang -->
                                <li class="product__content-right-infor-item">
                                    <p><i class="fas fa-phone-volume"></i> Gọi điện tư vấn đặt hàng tại: <span class="product__content-right-infor-call">12495094</span></p>
                                </li>
                            </ul>
                            <div class="product__content-right-bottom">
                                <div class="product__content-right-bottom-control">
                                    <button class="down"><i class="fas fa-chevron-down"></i></button>
                                </div>
                                <div class="product__content-right-bottom-content">
                                    <div class="product__content-right-bottom-content-title row">
                                        <div class="product__content-right-bottom-content-title-item infor">
                                            <p>Thông tin sản phẩm</p>                                    
                                        </div>
                                        <div class="product__content-right-bottom-content-title-item detail">
                                            <p>Chi tiết sản phẩm</p>
                                        </div>
                                    </div>
                                    <div class="product__content-right-bottom-content-data">
                                        <div class="product__content-right-bottom-content-data-infor">
                                            <?php echo $value['gioithieu'];?>
                                        </div>
                                        <div class="product__content-right-bottom-content-data-detail">
                                            <ul>
                                                <li>Tên sách: <span id="introduce__body-namebook"><?php echo $value['ten']?></span></li>
                                                <li>Tác giả: <span id="introduce__body-author"><?php echo $value['tacgia']?></span></li>
                                                <li>Số trang: <span id="introduce__body-page"><?php echo $value['sotrang']?></span></li>
                                                <!-- <li>Độ tuổi: <span id="introduce__body-aboutold">12+</span></li> -->
                                                <li>Ngày xuất bản: <span id="introduce__body-date"><?php echo $value['ngayxuatban']?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="product__content-right-ship">
                            <ul class="product__content-right-ship-list">
                                <li class="product__content-right-ship-item"><i class="far fa-heart"></i> Thêm vào ỷêu thích</li>
                                <li class="product__content-right-ship-item">
                                    <a href="" class="product__content-right-ship-item-link"><i class="fas fa-user-lock"></i> Ưu đãi khách hàng thân thiết</a>
                                </li>
                                <li class="product__content-right-ship-item">
                                    <a href="">
                                        <i class="fas fa-shipping-fast"></i> Để được giao hàng miễn phí
                                    </a>
                                </li>
                                <li class="product__content-right-ship-item">
                                    <p>share để nhận xu - Mua hàng không đồng</p>
                                    <ul class="app__share">
                                        <li class="app__share-item"><a href="" class="app__share-item-fb"><i class="fas fa-thumbs-up"></i> Thích</a></li>
                                        <li class="app__share-item"><a href="" class="app__share-item-twitter"><i class="fab fa-twitter"></i> Tweet</a></li>
                                        <li class="app__share-item"><a href="" class="app__share-item-pinterest"><i class="fab fa-pinterest"></i> Save</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product__container-bottom">
                    <div class="product__container-bottom-title" style="margin-bottom: 20px; font-size: 16px; font-weight: 600;">
                        Có thể bạn quan tâm
                    </div>
                    <div class="product__container-bottom-sp">
                        <div class="grid__col-10b">
                            <div class="grid__row">
                                <?php 

                                $xemthem = "SELECT * FROM sach";

                                $stmt = $conn->prepare($xemthem);

                                $stmt->execute();

                                $result_xemthem = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($result_xemthem as  $value2) {
                                    // code...
                                

                                ?>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <!-- <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img> -->
                                            <img class="product__container-bottom-sp-img" src="<?php echo './uploads/'.$value2['anh'];?>" alt="">
                                        </a>
                                        <h3 class="product__container-bottom-sp-name"><?php echo $value2['ten'];?></h4>
                                        <h4 class="product__container-bottom-sp-name-tg"><?php echo $value2['tacgia'];?></h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old"><?php echo $value2['giatien'].'VND';?></span>
                                            <span class="product__container-bottom-sp-price-new"><?php echo $value2['giatien'].'VND';?></span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">0%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <?php  }?>
                                <!-- <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </sectiom>
    </div>
    <!-- <div class="grid">
        <sectiom class="product">
            <div class="product__container">
                <div class="product__container-top row">
                    <p> Trang chủ</p> <i class="category-top__icon fas fa-hand-point-right"></i> 
                    <p>Thiếu nhi</p> <i class="category-top__icon fas fa-hand-point-right"></i> <p>Truyện tranh</p> <i class="category-top__icon fas fa-hand-point-right"></i> 
                    <p>HỌC SINH CHÂN KINH TẬP 25</p>
                </div>
                <div class="product__container-content">
                    <div class="product__content-left row">
                        <div class="product__content-left-big">
                            <img class="product__content-left-big-img" src="../images/sp1.jpg" alt="">
                        </div>
                        <div class="product__content-left-small">
                            <img src="../images/sp1.jpg" alt="" class="product__content-left-small-img">
                            <img src="../images/sp1-small.jpeg" alt="" class="product__content-left-small-img">
                            <img src="../images/sp1-small2.png" alt="" class="product__content-left-small-img">
                            <img src="../images/smallsp1.jpg" alt="" class="product__content-left-small-img">
                        </div>
                    </div>
                    <div class="product__content-right row">
                        <div class="product__content-right-infor">
                            <ul class="product__content-right-infor-list">
                                <li class="product__content-right-infor-item">
                                    <h3 class="product__content-right-infor-title">
                                        HỌC SINH CHÂN KINH TẬP 25
                                    </h3>
                                    <p>Họa sĩ: <span class="product__content-right-author">R.B.O</span></p>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <span class="product__content-right-infor-price-new">28.000 VND</span>
                                    <p>Giá cũ: <span class="product__content-right-infor-price-old">30.000 VND</span></p>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <label>Tình trạng: </label>
                                    <span class="product__content-right-infor-status">Còn hàng</span>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <label>Số lượng</label>
                                    <input type="number" min="0" value="1" class="product__content-right-infor-sum">
                                </li>
                                <li class="product__content-right-infor-item buy">
                                    <button class="product__content-right-infor-buy"><i class="buy__addcart fas fa-cart-plus"></i>Thêm vào giỏ hàng</button>
                                    <button class="product__content-right-infor-buy"><i class="buy__buynow fas fa-shopping-basket"></i>Mua ngay</button>
                                </li>
                                <li class="product__content-right-infor-item">
                                    <p><i class="fas fa-phone-volume"></i> Gọi điện tư vấn đặt hàng tại: <span class="product__content-right-infor-call">12495094</span></p>
                                </li>
                            </ul>
                            <div class="product__content-right-bottom">
                                <div class="product__content-right-bottom-control">
                                    <button class="down"><i class="fas fa-chevron-down"></i></button>
                                </div>
                                <div class="product__content-right-bottom-content">
                                    <div class="product__content-right-bottom-content-title row">
                                        <div class="product__content-right-bottom-content-title-item infor">
                                            <p>Thông tin sản phẩm</p>                                    
                                        </div>
                                        <div class="product__content-right-bottom-content-title-item detail">
                                            <p>Chi tiết sản phẩm</p>
                                        </div>
                                    </div>
                                    <div class="product__content-right-bottom-content-data">
                                        <div class="product__content-right-bottom-content-data-infor">
                                            Học Sinh Chân Kinh là bộ truyện tranh thiếu niên Việt Nam dài tập được sáng
                                            tác bởi B.R.O và phát hành bởi công ty Phan Thị. Tập đầu của bộ truyện, Muôn
                                            sự tại nhân, phát hành vào giữa năm 2013. Tuy nhiên, bộ truyện tranh đã bị 
                                            ngừng phát triển vào tháng 5 năm 2019
                                        </div>
                                        <div class="product__content-right-bottom-content-data-detail">
                                            <ul>
                                                <li>Tên sách: <span id="introduce__body-namebook">Học sinh chân kinh</span></li>
                                                <li>Tác giả: <span id="introduce__body-author">B.R.O</span></li>
                                                <li>Số trang: <span id="introduce__body-page">120</span></li>
                                                <li>Độ tuổi: <span id="introduce__body-aboutold">12+</span></li>
                                                <li>Ngày xuất bản: <span id="introduce__body-date">12/02/2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__content-right-ship">
                            <ul class="product__content-right-ship-list">
                                <li class="product__content-right-ship-item"><i class="far fa-heart"></i> Thêm vào ỷêu thích</li>
                                <li class="product__content-right-ship-item">
                                    <a href="" class="product__content-right-ship-item-link"><i class="fas fa-user-lock"></i> Ưu đãi khách hàng thân thiết</a>
                                </li>
                                <li class="product__content-right-ship-item">
                                    <a href="">
                                        <i class="fas fa-shipping-fast"></i> Để được giao hàng miễn phí
                                    </a>
                                </li>
                                <li class="product__content-right-ship-item">
                                    <p>share để nhận xu - Mua hàng không đồng</p>
                                    <ul class="app__share">
                                        <li class="app__share-item"><a href="" class="app__share-item-fb"><i class="fas fa-thumbs-up"></i> Thích</a></li>
                                        <li class="app__share-item"><a href="" class="app__share-item-twitter"><i class="fab fa-twitter"></i> Tweet</a></li>
                                        <li class="app__share-item"><a href="" class="app__share-item-pinterest"><i class="fab fa-pinterest"></i> Save</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product__container-bottom">
                    <div class="product__container-bottom-title" style="margin-bottom: 20px; font-size: 16px; font-weight: 600;">
                        Có thể bạn quan tâm
                    </div>
                    <div class="product__container-bottom-sp">
                        <div class="grid__col-10b">
                            <div class="grid__row">
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__col-2-4b">


                                    <div class="product__container-bottom-sp-item">
                                        <a href="../html/chitietsp.php">
                                            <img class="product__container-bottom-sp-img" src="../images/sp1.jpg"></img>
                                        </a>
                                        <h3 class="product__container-bottom-sp-name">Sách- Học sinh chân kinh tập 25</h4>
                                        <h4 class="product__container-bottom-sp-name-tg">R.B.O</h6>
                                        <div class="product__container-bottom-sp-price">
                                            <span class="product__container-bottom-sp-price-old">66.000VND</span>
                                            <span class="product__container-bottom-sp-price-new">50.000VND</span>
                                        </div>
                                        <div class="product__container-bottom-sp-favorite">
                                            <i class="fas fa-check"></i>
                                            Yêu thích
                                        </div>
                                        <div class="product__container-bottom-sp-sale-off">
                                            <span class="product__container-bottom-sp-sale-off-percent">10%</span>
                                            <br>
                                            <span class="product__container-bottom-sp-sale-off-label">GIẢM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </sectiom>
    </div> -->
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