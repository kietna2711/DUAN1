<?php
if (isset($_GET['view'])) {
    switch ($_GET['view']) {  
        case 'homeadmin':
            include_once "views/admin/t_header.php";
            include_once "views/admin/v_home.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'useradmin':
            include_once "views/admin/t_header.php";
            include_once "views/admin/v_user.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'categoryadmin':
            include_once "views/admin/t_header.php";
            include_once "views/admin/v_category.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'productadmin':
            include_once "views/admin/t_header.php";
            include_once "views/admin/v_product.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'oderadmin':
            include_once "views/admin/t_header.php";
            include_once "views/admin/v_oder.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'discount-code':
            include_once "views/admin/t_header.php";
            include_once "views/admin/v_discount-code.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'add-category':
            include_once "views/admin/t_header.php";
            include_once "views/admin/add-category.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'add-product':
            include_once "views/admin/t_header.php";
            include_once "views/admin/add-product.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'add-discount':
            include_once "views/admin/t_header.php";
            include_once "views/admin/add-discount.php";
            include_once "views/admin/t_footer.php";
            break;
        default:
            echo "TRang không tồn tại";
            break;
    }
}else{
    include_once "views/admin/t_header.php";
    include_once "views/admin/v_home.php";
    include_once "views/admin/t_footer.php";
}
?>
