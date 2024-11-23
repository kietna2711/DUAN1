<?php
// Điều hướng những trang liên quan đến tài khoản
//VD: Đăng ký, đăng nhập, Thông tin người dùng
if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'register':
            include_once "models/m_database.php";
            include_once "models/m_user.php";
            $user = new User;
            $kt = 0;
            $message1 = '';
            $message2 = '';
            
            if (isset($_POST['sign_up']) && $_POST['sign_up']) {
                if ($kt == 0) {
                    $email = $user->getALLByEmail($_POST['email']);
                    if (count($email) != 0) {
                        $message1 = "Email đã đăng ký rồi";
                        $kt = 1;
                    }
                }
                if ($kt == 0) {
                    // echo $_POST['psw'];
                    $user->createUser($_POST['name'], $_POST['email'],$_POST['password'],null,null);
                    $message1 = "Đã đăng ký thành công";
                }
            }
            
            
            if (isset($_POST['sign_in']) && $_POST['sign_in']) {
                // Gọi hàm login để kiểm tra thông tin người dùng
                $kt = $user->login($_POST['email'], $_POST['password']);
                // var_dump($kt);
                
                // Kiểm tra nếu tìm thấy người dùng
                if ($kt && $_POST['password'] === $kt[0]['password']) { 
                    // Mật khẩu chính xác, lưu thông tin vào session
                    $_SESSION['user'] = $kt[0];
                    if ($kt[0]['role'] === "User") {
                        header('location:index.php');
                    } else {
                        header('location:Admin.php?ctrl=admin');
                    }
                    exit;
                } else {
                    // Mật khẩu hoặc tài khoản sai
                    $message2 = "Mật khẩu không trùng khớp hoặc tài khoản không tồn tại";
                }
            }
            
            
            // Load view
            include_once "views/user/v_register.php";
            break;
        case 'logout':   
            include_once "views/logout.php";
            break;
        default:
            echo "Trang không tồn tại";
            break;
    }
} else {
    include_once "models/m_database.php";
    include_once "models/m_product.php";
    include_once "models/m_blog.php";
    $blog = new Blog();
    $blogALL = $blog ->getALLBlog();
    // var_dump($blogALL);
    $blogSP = $blog->getOneIdBlog(1);
    // var_dump($blogSP);
    $product =new Product();
    $productHot=$product->getALLdaban(0,8);
    $productDM = $product ->getDMById(2);

    // var_dump($productDM);
    // var_dump($productHot);
    include_once "views/user/t_header.php";
    include_once "views/user/v_home.php";
    include_once "views/user/t_footer.php";
}
?>
