<?php

if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'category': 
            include_once "models/m_database.php";
            include_once "models/m_product.php";
            include_once "models/m_category.php";
            $db = new Category();
            $products = new Product();
            $categorys = $db->getALLDM();
            // var_dump($category);
            // Khởi tạo đối tượng Sanpham

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
            $db = new Category();
            $categorys = $db->getALLDM();
            $product = new Product();
            $productHot=$product->getALLdaban(0,8);
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
            include_once "models/m_database.php";
            include_once "models/m_cart.php";
            include_once "models/m_user.php";
            include_once "models/m_product.php";
            include_once "models/m_category.php";
            $db = new Category();
            $categorys = $db->getALLDM();
            $product =new Product();
            $cart = new Cart();
            $productHot=$product->getALLdaban(0,8);
            // $eror = '';
            if (isset($_SESSION['user']['user_id'])) {
                $user_id = $_SESSION['user']['user_id'];
                $cartItems = $cart->getAllCart($user_id);

                if (isset($_POST['addCart'])) {
                    $quantity = $_POST['quantity'];
                    $product_id = $_POST['product_id'];
                    $cartItem = $cart->getCartById($user_id, $product_id);
            
                    if ($cartItem) {
                        $newQuantity = $cartItem['quantity'] + $quantity;
                        $cart->updateCart($user_id, $product_id, $newQuantity);
                    } else {
                        $cart->addProductToCart($user_id, $product_id, $quantity);
                    }
                    header("Location: ?ctrl=product&view=cart");
                    exit();  // Ngừng mã tiếp theo, ngăn chặn tiếp tục xử lý
                }
            } else {
                // $error = "Bạn chưa đăng nhập!";
            }
            if (isset($_SESSION['user']['user_id'])) {
                $user_id = $_SESSION['user']['user_id'];

                // Kiểm tra nếu có product_id trong URL để xóa sản phẩm khỏi giỏ hàng
                if (isset($_GET['id']) && !empty($_GET['id'])) {
                    $product_id = $_GET['id'];
                    if (is_numeric($product_id)) {
                        $cart->deleteCart($user_id, $product_id);
                        header("Location: ?ctrl=product&view=cart");
                        exit();  // Dừng mã tiếp theo để ngừng xử lý
                    } else {
                        echo "ID sản phẩm không hợp lệ.";
                    }
                } else {
                    
                }
            } else {
                echo "Bạn cần đăng nhập để thực hiện thao tác này.";
            }


            include_once "views/user/t_header1.php";
            include_once "views/user/v_cart.php";
            include_once "views/user/t_footer.php";
            break;  
        case 'pay':
            include_once "models/m_database.php";
            include_once "models/m_product.php";
            include_once "models/m_category.php";
            $db = new Category();
            $categorys = $db->getALLDM();
            $product =new Product();
            $productHot=$product->getALLdaban(0,8);
            $productDM = $product ->getDMById(2);
            include_once "views/user/t_header1.php";
            include_once "views/user/v_pay.php";
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
