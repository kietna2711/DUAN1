<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="icon" href="public/user/img/logo.png">
    <link rel="stylesheet" href="public/admin/css/style.css">
</head>
<body>
   <nav id="sidebar">
        <ul>
            <li>
                <img class="logo" src="./img/logo.jpg" alt="">
            </li>
            <li class="active">
                <a href="?ctrl=admin&view=homeadmin" class="active1">
                    <i class="fa-solid fa-house"></i>
                    <span>Trang chủ Admin</span>
                </a>
            </li>
            <li class="active">
                <a href="?ctrl=admin&view=useradmin">
                    <i class="fa-solid fa-user-gear"></i>
                    <span>Quản lí Tài khoản</span>
                </a>
            </li>
            <li>
                <button onclick="toggleSuMenu(this)" class="dropdown-btn">
                    <i class="fa-solid fa-list"></i>
                    <span>Quản lí danh mục</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <ul class="sub-menu">
                    <li><a href="?ctrl=admin&view=categoryadmin">Danh mục</a></li>
                    <li><a href="?ctrl=admin&view=productadmin">Sản phẩm</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="?ctrl=admin&view=oderadmin">
                    <i class="fa-solid fa-clipboard"></i>
                    <span>Quản lí đơn hàng</span>
                </a>
            </li>
            <li class="active">
                <a href="?ctrl=admin&view=discount-code">
                    <i class="fa-solid fa-barcode"></i>
                    <span>Quản lí mã giảm giá</span>
                </a>
            </li>  
        </ul>
    </nav>
    <main>
        <div class="header">
            <input class="search" type="text" name="" id="" placeholder="Tìm kiếm">
            <div class="about-us">
                <p>Tên Admin</p>    
                <img src="public/admin/img/avata.jpg" alt="">
            </div>
        </div>