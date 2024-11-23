<?php
session_start();

if (isset($_GET['ctrl'])) {
    switch ($_GET['ctrl']) {
        case 'admin':
            if (isset($_SESSION['user']) && $_SESSION['user']['role'] === "Admin") {
                include_once "controllers/ctrl_admin.php";
            } else {
                header("location:index.php");
            }
            break;
        default:
            echo "Trang không tồn tại";
            break;
    }
} else {
    include_once "controllers/ctrl_admin.php";
}

?>