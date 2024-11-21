<?php
if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'category': 
            include_once "views/user/t_header1.php";
            include_once "views/user/v_category.php";
            include_once "views/user/t_footer.php";
            break;  
        case 'productdetail':
            include_once "views/user/t_header1.php";
            include_once "views/user/v_productDetail.php";
            include_once "views/user/t_footer.php";
            break;
        case 'cart':
            include_once "views/user/t_header1.php";
            include_once "views/user/v_cart.php";
            include_once "views/user/t_footer.php";
            break;  
        default:
            echo "TRang không tồn tại";
            break;
    }
}else{
    include_once "views/user/t_header1.php";
    include_once "views/user/v_page_home.php";
    include_once "views/user/t_footer.php";
}
?>
