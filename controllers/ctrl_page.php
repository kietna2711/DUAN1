<?php
//Điều  hướng đến các trang khong liên quan với nhau
// VD: 
// echo "Điều hướng đến ctrl_page";
if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'home':
            // var_dump($spdaban);
            // //Lấy dữ liệu datab
            include_once "views/user/t_header.php";
            include_once "views/user/v_home.php";
            include_once "views/user/t_footer.php";
            break;
        case 'lienhe':
            include_once "views/user/t_header.php";
            include_once "views/user/t_footer.php";
            break;    
        case 'gioithieu':
            include_once "views/user/t_header.php";
            include_once "views/user/t_footer.php";
        default:
            echo "TRang không tồn tại";
            break;
    }
}else{
    include_once "views/user/t_header.php";
    include_once "views/user/v_home.php";
    include_once "views/user/t_footer.php";
}
?>