<?php
session_start();
// Điều hướng tới các controllers
if(isset($_GET['ctrl'])){
    switch ($_GET['ctrl']) {
        case 'page':
            include_once "controllers/ctrl_page.php";
            break;
        case 'product':
            include_once "controllers/ctrl_product.php";
            break;
        case 'user':
            include_once "controllers/ctrl_user.php";
            break;
        // case 'admin':
        //     include_once "controllers/ctrl_admin.php";
        //     break;
        default:
            echo "Trang không tồn tại";
            break;
    }
} else {
    include_once "controllers/ctrl_page.php";
}
?>
