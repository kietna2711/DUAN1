<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetiy</title>
    <link rel="stylesheet" href="public/user/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="public/user/css/reponsize.css">
    <link rel="icon" href="public/user/img/logo.png">
</head>
<style></style>
<body>
    <div id="loading-screen">
        <div class="ellipsis">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    
    
    <div class="baner">
        <img id="img" src="public/user/img/home_slider_item_image_desktop_2.webp" alt="" width="100%">
        <button class="left" onclick="prev()"><i class="fa-solid fa-circle-chevron-left"></i></button>
        <button class="right" onclick="next()"><i class="fa-solid fa-circle-chevron-right"></i></button>
    </div>
    <header>
        <div class="top-section">
            <a href="#" class="logo"><img src="public/user/img/Beauty_Clinic_with_woman_inside_logo_template-removebg-preview.png" alt="" width="200px" height="150px"></a>
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Bạn cần tìm gì ...?" class="search-bar">
                <i class="fa fa-search search-icon"></i>
                <a href="#" class="search-icon"><i class="icon-search"></i></a>
            </div>
            <div class="right-icons">
                <a href="dndk.html"><img src="public/user/img/user-removebg-preview.png" alt=""></a>
                <a href="#"><img src="public/user/img/love-removebg-preview.png" alt=""></a>
                <a href="#"><img src="public/user/img/giohang-removebg-preview.png" alt=""></i></a>
            </div>
        </div>
        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="?ctrl=page&view=home">Trang chủ</a></li>
                <li class="has-submenu">
                    <a href="#">Nhóm sản phẩm</a>
                    <ul class="submenu">
                        <li><a href="danhmuc.html">Chống lão hóa</a></li>
                        <li><a href="#">Skincare</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Sản phẩm hot</a>
                    <ul class="submenu">
                        <li><a href="ctsp.html">AGELESS Total Repair Crème</a></li>
                        <li><a href="#">AGELESS Total Retinol A Crème</a></li>
                        <li><a href="#">PREVENTION+ Ultra Sheer Spray SPF45+</a></li>
                        <li><a href="#">Image The MAX Stem Cell Crème</a></li>
                    </ul>
                </li>
                <li><a href="#">Tin tức nổi bật</a></li>
                <li><a href="blog.html">Giới thiệu</a></li>
                <li><a href="lienhe.html">Liên hệ</a></li>
            </ul>
            <img src="public/user/img/3gach.png" alt="menu" class="menu-sp">
        </nav>
    </header>