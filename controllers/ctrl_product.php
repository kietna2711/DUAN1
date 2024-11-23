<?php
if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'category': 
            include_once "models/m_database.php";
            include_once "models/m_product.php";
            include_once "models/m_category.php";
            $db = new Category();
            $category = $db->getALLDM();
            // Khởi tạo đối tượng Sanpham
            $products = new Product();
            // $product=$_GET['categiry_id'];
            // $productct=$product->getDMById($pcategiry_id);
            $productHot=$products->getALLdaban(0,8);
            $productDM = $products ->getDMById(2);
            // Kiểm tra trang hiện tại
            if (isset($_GET['trang'])) {
                $st = $_GET['trang'];  // Trang hiện tại
            } else {
                $st = 1;  // Mặc định là trang 1
            }

            // Kiểm tra nếu có tham số category_id trong URL
            if (isset($_GET['category_id'])) {
                $countProduct = $products->getDMById($_GET['category_id']);
                $dsproduct = $products->getALLidDMALL($_GET['category_id'], $st, 4);
            } else {
                $countProduct = $products->getALLSP();
                $dsproduct = $products->getALLSPtrang($st, 4);
            }


            include_once "views/user/t_header1.php";
            include_once "views/user/v_category.php";
            include_once "views/user/t_footer.php";
            break;  
        case 'productdetail':
            include_once "models/m_database.php";
            include_once "models/m_product.php";
            include_once "models/m_category.php";
            $product = new Product();
            $id = $_GET["product_id"];
            $productDetail = $product->getById($id);
            $category_id = $productDetail[0]['category_id'];
            $productGY= $product ->getDMById($category_id);
            // var_dump($productGY);
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
