<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="public/user/css/styles.css">
    <link rel="stylesheet" href="public/user/css/ctsp.css">
    <link rel="stylesheet" href="public/user/css/danhmuc.css">
    <link rel="stylesheet" href="public/user/css/footer.css">
    <!-- <link rel="stylesheet" href="public/user/css/lienhe.css"> -->
</head>
<body>
    <header>
        <div class="top-section">
            <a href="#" class="logo"><img src="public/user/img/logo.png" alt="" width="200px" height="150px"></a>
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Bạn cần tìm gì ...?" class="search-bar">
                <i class="fa fa-search search-icon"></i>
                <a href="#" class="search-icon"><i class="icon-search"></i></a>
            </div>
            <div class="right-icons">
                <a href="?ctrl=user&view=register"><img src="public/user/img/user-removebg-preview.png" alt=""></a>
                <a href="#"><img src="public/user/img/love-removebg-preview.png" alt=""></a>
                <a href="?ctrl=product&view=cart"><img src="public/user/img/giohang-removebg-preview.png" alt=""></i></a>
            </div>
        </div>
        <nav class="navbar">
            <ul class="nav-links">
            <li><a href="?ctrl=page&view=home">Trang chủ</a></li>
                <li class="has-submenu">
                    <a href="?ctrl=product&view=category">Nhóm sản phẩm</a>
                    <ul class="submenu">
                        <li><a href="#">Chống lão hóa</a></li>
                        <li><a href="#">Skincare</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="?ctrl=product&view=category">Sản phẩm hot</a>
                    <ul class="submenu">
                    <?php foreach($productHot as $hot){        
                    $link="?ctrl=product&view=productdetail&product_id=".$hot['product_id'];
                    ?>

                        <li><a href="ctsp.html"><?=$hot['name']?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="?ctrl=page&view=blog">Tin tức nổi bật</a></li>
                <li><a href="?ctrl=page&view=introduce">Giới thiệu</a></li>
                <li><a href="?ctrl=page&view=contact">Liên hệ</a></li>
            </ul>
            <img src="public/user/img/3gach.png" alt="menu" class="menu-sp">
        </nav>
    </header>