<?php
include 'connectDB.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/base.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <!-- <img src="../images/logo.png" alt="" id="logo__img"> -->
                <a href="../html/trangchu.php" class="logo__link">
                    Book<span>Shop </span><i class="fas fa-book-reader"></i>
                </a>
            </div>
            <div class="menu">
                <li class="menu__item">
                    <a href="sanpham.php" class="menu__link">Sản phẩm</a>
                    <ul class="sub-menu">
                        <!-- Mục sản phẩm Sách thiếu nhi-->
                        <li><a href="sachthieunhi.php" class="sub-menu__link">Sách thiếu nhi <span class="dau">&rsaquo;</span></a> <!--&rsaquo; trong thẻ span là kí hiệu > -->
                        <!-- Phần mở rộng của mục Sách thiếu nhi-->
                        <ul id="sub-menu__list-chidren">
                            <li class="sub-menu__item-child">
                                <a href="./sanpham.php" class="sub-menu__link-child">Truyện tranh </a>
                            </li>
                            <li class="sub-menu__item-child">
                                <a href="" class="sub-menu__link-child">Sách khoa học cho trẻ</a>
                            </li>
                            <li class="sub-menu__item-child">
                                <a href="" class="sub-menu__link-child">Sách rèn luyện kỹ năng</a>
                            </li>
                            <li class="sub-menu__item-child">
                                <a href="" class="sub-menu__link-child">Mỹ thuật âm nhạc</a>
                            </li>
                            <li class="sub-menu__item-child">
                                <a href="" class="sub-menu__link-child">Sách ngoại ngữ</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Mục sản phẩm sách giáo khoa-->
                    <li><a href="" class="sub-menu__link">Sách giáo khoa <span class="dau">&rsaquo;</span></a>
                    <!-- Phần mở rộng của mục Sách giáo khoa-->
                    <ul id="sub-menu__list-textbook">
                        <li class="sub-menu__item-child">
                            <a class="sub-menu__link-child">Sách giáo khoa</a>
                        </li>
                        <li class="sub-menu__item-child">
                            <a class="sub-menu__link-child">Sách bài tập</a>
                        </li>
                        <li class="sub-menu__item-child">
                            <a class="sub-menu__link-child">Sách tham khảo</a>
                        </li>
                    </ul>
                </li>
                <!-- Mục sản phẩm sách kinh doanh-->
                <li><a href="" class="sub-menu__link">Sách kinh tế <span class="dau">&rsaquo;</span></a>
                <!-- Phần mở rộng của mục Sách kinh doanh-->
                <ul id="sub-menu__list-business">
                    <li><a href="" class="sub-menu__link-child">Quản trị và lãnh đạo</a></li>
                    <li><a href="" class="sub-menu__link-child">Kinh tế tài chính</a></li>
                    <li><a href="" class="sub-menu__link-child">Marketing và bán hàng</a></li>
                    <li><a href="" class="sub-menu__link-child">Đầu tư và chứng khoán</a></li>
                    <li><a href="" class="sub-menu__link-child">Nhân sự, việc làm</a></li>
                </ul>
            </li>
            <!-- Mục sản phẩm sách bách khoa -->
            <li><a href="" class="sub-menu__link">Sách chuyên ngành <span class="dau">&rsaquo;</span></a>
            <!-- Phần mở rộng của mục Sách bách khoa-->
            <ul id="sub-menu__list-wikipedia">
                <li class="sub-menu__link-child">Âm nhạc, nghệ thuật</li>
                <li class="sub-menu__link-child">Khoa học kỹ thuật</li>
                <li class="sub-menu__link-child">Công nghệ thông tin</li>
                <li class="sub-menu__link-child">Du lịch</li>
                <li class="sub-menu__link-child">Thể thao</li>
                <li class="sub-menu__link-child">Y học</li>
            </ul>
        </li>
        <!-- Mục sản phẩm sách cũ -->
        <li><a href="" class="sub-menu__link">Thường thức đời sống <span class="dau">&rsaquo;</span></a>
        <ul id="sub-menu__list-booklife">
            <li class="sub-menu__link-child">Bí quyết làm đẹp</li>
            <li class="sub-menu__link-child">Hạnh phúc gia đình</li>
            <li class="sub-menu__link-child">Sách nấu ăn</li>
            <li class="sub-menu__link-child">Nuôi trồng</li>
            <li class="sub-menu__link-child">Sinh lý học</li>
            <li class="sub-menu__link-child">Tâm lý học</li>
        </ul>
    </li>
    <!-- Mục sản phẩm văn phòng phẩm -->
    <li><a href="" class="sub-menu__link">Tạp chí văn phòng phẩm <span class="dau">&rsaquo;</span></a>
    <ul id="sub-menu__list-stationery">
        <li class="sub-menu__link-child">Sổ tay,giấy in</li>
        <li class="sub-menu__link-child">Dụng cụ vẽ</li>
        <li class="sub-menu__link-child">Lịch</li>
    </ul>
</li>
</ul>
</li>
<li class="menu__item"><a href="./gioithieu.php" class="menu__link">Giới thiệu</a></li>
<li class="menu__item"><a href="./chinhsachdaily.php" class="menu__link">Chính sách đại lý</a></li>
<li class="menu__item"><a href="./lienhe.php" class="menu__link">Liên hệ</a></li>
<li class="menu__item"><a href="./tintuc.php" class="menu__link">Tin tức</a></li>
</div>
<div class="others">
<li class="others__item"><form action="sanpham.php" method="GET"><input type="text" placeholder="Tìm kiếm sách..." class="others__item-input" name="timkiemtensach"></form><i class="fas fa-search"></i></li>
<li class="others__item"><i class="mobile-search-icon fas fa-search"></i></li>
<li class="others__item"><a href="./giohang.php" class="fa fa-shopping-bag"></a></li>
<li class="others__item others__account" onclick="toggleacount()"><a href="#" class="fa fa-user"></a></li>

<li class="others__item-1">
<div class="menu-mobile__btn">
<i class="fas fa-bars"></i>
</div>
</li>

<!-- Phần mở rộng đăng nhâp -->
<div class="account__extend">
    <li>
    <?php if(isset($_SESSION['taikhoan'])) {
    echo $_SESSION['taikhoan'];
    }?>
    </li>
    <li><a href="./login.php">Đăng nhập</a></li>
    <li>
    <a href="dangxuat.php">Đăng xuất</a>
    </li>
    <li>Đổi tài khoản</li>
</div>
<script>
    function toggleacount() {
        var acount_extend= document.querySelector('.account__extend');
        if (acount_extend.style.display === "none") {
            acount_extend.style.display = "block";
        } else {
        acount_extend.style.display = "none";
  }
}
    

</script>

</div>
<div class="menu__overlay"></div>
<div class="menu-mobile">
<div class="menu-mobile__times">
<i class="menu-check fas fa-times"></i>
</div>
<li class="menu-mobile__item sp_mobile"><a href="#" class="menu-mobile__link">Sản phẩm</a></li>
<div class="category-mobile-menu">
<ul class="category-menu__list">
<li class="category-menu__list-item">
<a href="sachthieunhi.php" target="_self" class="category-menu__list-item-link">Sách thiếu nhi</a>
<ul class="category-menu__extends">
    
    <li class="category-menu__extends-item"> <a href="./sanpham.php">Truyện tranh</a> </li>
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
<li class="menu-mobile__item"><a href="./Gioithieu.php" class="menu-mobile__link">Giới thiệu</a></li>
<li class="menu-mobile__item"><a href="" class="menu-mobile__link">Chính sách đại lý</a></li>
<li class="menu-mobile__item"><a href="" class="menu-mobile__link">Liên hệ</a></li>
<li class="menu-mobile__item"><a href="" class="menu-mobile__link">Tin tức</a></li>
</div>
<div class="mobile__search">
<input type="text" class="mobile__input" placeholder="Tim kiem sach...."><i class="fas fa-check"></i>
<br>
<div class="search__close">
<i class="search__up fas fa-chevron-up"></i>
</div>
</div>
</header>
</body>
</html>