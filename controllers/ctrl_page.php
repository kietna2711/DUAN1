<?php
//Điều  hướng đến các trang khong liên quan với nhau
// VD: 
// echo "Điều hướng đến ctrl_page";
if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'home':
            // var_dump($spdaban);
            // //Lấy dữ liệu datab
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
            // var_dump($productHot);
            include_once "views/user/t_header.php";
            include_once "views/user/v_home.php";
            include_once "views/user/t_footer.php";
            break;
        case 'blog':
            include_once "models/m_database.php";
            include_once "models/m_product.php";
            $product =new Product();
            $productHot=$product->getALLdaban(0,8);
            $productDM = $product ->getDMById(2);
            include_once "views/user/t_header1.php";
            include_once "views/user/v_blog.php";
            include_once "views/user/t_footer.php";
            break;    
        case 'introduce':
            include_once "models/m_database.php";
            include_once "models/m_product.php";
            $product =new Product();
            $productHot=$product->getALLdaban(0,8);
            $productDM = $product ->getDMById(2);
            include_once "views/user/t_header1.php";
            include_once "views/user/v_introduce.php";
            include_once "views/user/t_footer.php";
            break;
        case 'contact':
            include_once "models/m_database.php";
            include_once "models/m_product.php";
            $product =new Product();
            $productHot=$product->getALLdaban(0,8);
            $productDM = $product ->getDMById(2);
            include_once "views/user/t_header1.php";
            include_once "views/user/v_contact.php";
            include_once "views/user/t_footer.php";
            break;
        default:
            echo "TRang không tồn tại";
            break;
    }
}else{
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