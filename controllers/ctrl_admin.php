<?php
if (isset($_GET['view'])) {
    switch ($_GET['view']) {  
        case 'homeadmin':
            include_once "models/m_database.php";
            include_once "models/m_user.php";
            include_once "models/m_product.php";
            $users = new User();
            $products = new Product();

            $getALLUser = $users->getALLUser();
            $getALLProduct = $products->getALLSP();

            function getTotalCount($items) {
                return count($items);
            }
            $totalUsers = getTotalCount($getALLUser);
            $totalProducts = getTotalCount($getALLProduct);
            include_once "views/admin/t_header.php";
            include_once "views/admin/v_home.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'useradmin':
            include_once "models/m_database.php";
            include_once "models/m_user.php";
            $users = new User();
            $getALLUser = $users->getALLUser();
            // var_dump($getALLUser);
            include_once "views/admin/t_header.php";
            include_once "views/admin/v_user.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'categoryadmin':
            include_once "models/m_database.php";
            include_once "models/m_user.php";
            // $category = new Category();
            // $getALLCategory = $category>getALLUser();
            include_once "views/admin/t_header.php";
            include_once "views/admin/v_category.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'productadmin':
            include_once "models/m_database.php";
            include_once "models/m_product.php";
            $products = new Product();
            $getALLProduct = $products->getALLSP();
            // var_dump($getALLProduct);
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
    include_once "models/m_database.php";
    include_once "models/m_user.php";
    include_once "models/m_product.php";
    include_once "models/m_category.php";
    $users = new User();
    $products = new Product();

    $getALLUser = $users->getALLUser();
    $getALLProduct = $products->getALLSP();

    function getTotalCount($items) {
        return count($items);
    }
    $totalUsers = getTotalCount($getALLUser);
    $totalProducts = getTotalCount($getALLProduct);
    include_once "views/admin/t_header.php";
    include_once "views/admin/v_home.php";
    include_once "views/admin/t_footer.php";
}
?>
