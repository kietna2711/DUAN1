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
            $getALLProduct = $products->getALLSPADMIN();

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
            include_once "models/m_category.php";
            $category = new Category();
            $getALLCategory = $category->getALLDMADMIN();
            if (isset($_POST['toggle_status'])) {
                $category_id = $_POST['category_id'];
                $current_status = $_POST['current_status'];
                $category->toggleHidden($category_id, $current_status);
            
                header("Location: Admin.php?ctrl=admin&view=categoryadmin");
                exit();
            }
            // var_dump($getALLCategory);
            include_once "views/admin/t_header.php";
            include_once "views/admin/v_category.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'productadmin':
            include_once "models/m_database.php";
            include_once "models/m_product.php";
            $products = new Product();
            $getALLProduct = $products->getALLSPADMIN();
            if (isset($_POST['toggle_status'])) {
                $product_id = $_POST['product_id'];
                $current_status = $_POST['current_status'];
        
                $products->toggleHidden($product_id, $current_status);
            
                header("Location: Admin.php?ctrl=admin&view=productadmin");
                exit();
            }
            
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
            include_once "models/m_database.php";
            include_once "models/m_category.php";
            $category = new Category();
            if (isset($_POST['them']) && $_POST['them']) {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $image = $_FILES['image']['name'];

                $kt = 1;
            
                if (empty($name)) {
                    $name_err = "Vui lòng nhập tên danh mục";
                    $kt = 0;
                }
                if (empty($description)) {
                    $iddm_err = "Vui lòng nhập mô tả";
                    $kt = 0;
                }
                if ($kt == 1) {                 
                    $target_file = "public/user/img/".$image;
                    // Kiểm tra tên file
                    if(!file_exists($target_file)){
                        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                    }
                    $category ->creatDM($name, $description, $image);
                    header("Location: Admin.php?ctrl=admin&view=categoryadmin");
                    exit();
                }
            }
            include_once "views/admin/t_header.php";
            include_once "views/admin/add-category.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'add-product':
            include_once "models/m_database.php";
            include_once "models/m_category.php";
            include_once "models/m_product.php";
            $products = new Product();
            $category = new Category();
            $getALLCategory = $category->getALLDM();
            if (isset($_POST['them']) && $_POST['them']) {
                $image1 = $_FILES['image1']['name'];
                $image2 = $_FILES['image2']['name'];
                $name = $_POST['name'];
                $iddm = $_POST['iddm'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $kt = 1; // Thiết lập biến kiểm tra
            
                // Kiểm tra dữ liệu
                if (empty($name)) {
                    $name_err = "Vui lòng nhập tên sản phẩm";
                    $kt = 0;
                }
                if (empty($description)) {
                    $description_err = "Vui lòng nhập mô tả";
                    $kt = 0;
                }
                if (empty($iddm)) {
                    $iddm_err = "Vui lòng chọn danh mục";
                    $kt = 0;
                }
                if (empty($price)) {
                    $price_err = "Vui lòng nhập giá";
                    $kt = 0;
                }
            
                if ($kt == 1) {
                    // Kiểm tra và di chuyển ảnh
                    $target_dir = "public/user/img/";
                    $target_file1 = $target_dir . basename($image1);
                    $target_file2 = $target_dir . basename($image2);
            
                    // Đảm bảo không trùng tên file
                    if (!file_exists($target_file1)) {
                        move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
                    }
            
                    if (!file_exists($target_file2)) {
                        move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
                    }
                    $products->insertSP($name, $price, $description, $image1, $image2, $quantity = 0, $sold = 0, $iddm);
                    header("Location: Admin.php?ctrl=admin&view=productadmin");
                    exit();
                }
            }            
            
            include_once "views/admin/t_header.php";
            include_once "views/admin/add-product.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'update-product':
            include_once "models/m_database.php";
            include_once "models/m_category.php";
            include_once "models/m_product.php";
            $products = new Product();
            $category = new Category();
            $id = $_GET['id'];
            $productALL = $products->getById($id);
            $getALLCategory = $category->getALLDM();
            // var_dump($productALL);
            if (isset($_POST['update']) && $_POST['update']) {
                $image1 = $_FILES['image1']['name'];
                $image2 = $_FILES['image2']['name'];
                $name = $_POST['name'];
                $iddm = $_POST['iddm'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                if ($image1 && $image2) {
                    // Kiểm tra và di chuyển ảnh
                    $target_dir = "public/user/img/";
                    $target_file1 = $target_dir . basename($image1);
                    $target_file2 = $target_dir . basename($image2);
            
                    // Đảm bảo không trùng tên file
                    if (!file_exists($target_file1)) {
                        move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
                    }
            
                    if (!file_exists($target_file2)) {
                        move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
                    }
                    $products->updateSP($name, $price, $description, $image1, $image2, $quantity = 0, $sold = 0, $iddm, $id);
                    header("Location: Admin.php?ctrl=admin&view=productadmin");
                    exit();
                } else {
                    echo "Vui lòng tải lên đầy đủ ảnh sản phẩm.";
                }
            }  
            include_once "views/admin/t_header.php";
            include_once "views/admin/update-product.php";
            include_once "views/admin/t_footer.php";
            break;
        case 'update-category':
            include_once "models/m_database.php";
            include_once "models/m_category.php";
            $category = new Category();
            $id = $_GET['id'];
            $categoryALL = $category->getByIDDM($id);
            // var_dump($productALL);
            if (isset($_POST['update']) && $_POST['update']) {
                $image = $_FILES['image']['name'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                if ($image) {
                    // Kiểm tra và di chuyển ảnh
                    $target_dir = "public/user/img/";
                    $target_file1 = $target_dir . basename($image1);
                    if (!file_exists($target_file1)) {
                        move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
                    }
                    $category->updateDM($name, $description, $image, $id);
                    header("Location: Admin.php?ctrl=admin&view=categoryadmin");
                    exit();
                } else {
                    echo "Vui lòng tải lên đầy đủ ảnh sản phẩm.";
                }
            }  
            include_once "views/admin/t_header.php";
            include_once "views/admin/update-category.php";
            include_once "views/admin/t_footer.php";
            break;
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
    $getALLProduct = $products->getALLSPADMIN();

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
