<div class="grid-container">
        <!-- Ảnh lớn bên trái -->
        <div class="grid-item grid-item-1">
            <img src="public/user/img/sp1.webp" alt="" >
        </div>
    
        <!-- Ảnh phía trên bên phải -->
        <div class="grid-item grid-item-2">
            <img src="public/user/img/sp2.webp" alt="">
        </div>
    
        <!-- Hai ảnh phía dưới bên phải -->
        <div class="grid-item grid-item-3">
            <img src="public/user/img/sp4.webp" alt="">
            <img src="public/user/img/sp3.webp" alt="">
        </div>
    </div>
    <div class="th">
        <img src="public/user/img/th.webp" alt="">
    </div>
    


    <div class="sp-banchay">
        <h1 class="header">Bán chạy trong tháng</h1>
        <div class="menunho">
            <a href="#" class="menu-item">Skincare</a>
            <a href="#" class="menu-item">Bổ sung collage</a>
            <a href="#" class="menu-item">Chống lão hóa</a>
        </div>
    </div>


    <div class="notification" id="notification">
        <div class="notification-header">
          <span>Thông báo mới nhất</span>
          <button class="close-btn" id="close-btn">&times;</button>
        </div>
        <div class="notification-content">
          <ul>
            <li>> Hot trend</li>
            <li>> New Arrival</li>
          </ul>
          <p>- Cập nhật nhanh chóng các thông tin mới nhất đến với bạn</p>
        </div>
      </div>
      <div class="bell-icon" id="bell-icon">
        🔔
      </div>
      

<div class="th1">
    <?php foreach($productHot as $hot){
        $link="?ctrl=product&view=productdetail&product_id=".$hot['product_id'];
        ?>
        <a href="<?=$link?>">
        <div class="sanpham">
            <div class="sanpham1">14%</div>
            <img src="public/user/img/<?=$hot['image1']?>" alt="" class="anh1hover">
            <img src="public/user/img/<?=$hot['image2']?>" alt="" class="anh2hover">
            <div class="hover-content">
                <div class="xn">Xem nhanh</div>
                <div class="sanpham1">14%</div>
            </div>
            <div class="gt"><?=$hot['name']?></div>
            <div class="gia">
                <span class="giamgia">1,500,000₫</span>
                <span class="giamseo"><?=$hot['price']?></span>
            </div>
            <form action="?ctrl=product&view=cart" method="post">
                <input type="hidden" name="product_id" value="<?=$hot['product_id']?>">
                <input type="hidden" name="quantity" value="1">
                <input type="submit" name="addCart" class="add-to-cart" value="Thêm vào giỏ hàng">
            </form>
        </div>
        </a>
    <?php } ?>
</div>



<div class="tgoiyt">
<div class="tgoiy">
    <div class="goiy">
        <h1>Danh mục:</h1>
        <?php foreach($categorys as $category){ ?>
        <div class="xemnhiu">
            <div class="item">
                <img src="public/user/img/<?= $category['image_url'] ?>" alt="Sữa tắm">
                <p><?= $category['category_name'] ?></p>
            </div>
        </div>
        <?php } ?>
        <!-- <div class="xemnhiu">
            <div class="item">
                <img src="public/user/img/st1.webp" alt="Sữa tắm">
                <p>Sữa tắm</p>
            </div>
            <div class="item">
                <img src="public/user/img/st2.webp" alt="Phấn trang điểm">
                <p>Phấn trang điểm</p>
            </div>
            <div class="item">
                <img src="public/user/img/st3.webp" alt="Son môi">
                <p>Son môi</p>
            </div>
            <div class="item">
                <img src="public/user/img/st4.webp" alt="Nước hoa nam">
                <p>Nước hoa nam</p>
            </div>
            <div class="item">
                <img src="public/user/img/st5.webp" alt="Nước hoa nữ">
                <p>Nước hoa nữ</p>
            </div>
            <div class="item">
                <img src="public/user/img/st6.webp" alt="Thực phẩm chức năng">
                <p>Thực phẩm chức năng</p>
            </div>
            <div class="item">
                <img src="public/user/img/st7.webp" alt="Dầu gội">
                <p>Dầu gội</p>
            </div>
            <div class="item">
                <img src="public/user/img/st8.webp" alt="Dầu xả">
                <p>Dầu xả</p>
            </div>
        </div> -->
    </div>
</div>
</div>



<div class="sp-banchay">
        <h1 class="header">Sản phẩm mới</h1>
</div>
<div class="whenin">
    <div class="spgy">
    <?php if (!empty($blogSP)) { ?>
        <img src="public/user/img/<?=$blogSP['image']?>" alt="Main Product">
        <div class="gtng">
            <h2><?=$blogSP['title']?></h2>
            <p><?=$blogSP['content']?></p>
        </div>
    <?php } ?>

    </div>
<div class="sp">
    <?php
    // $limitedproductDM = array_slice($productDM, 0, 6);
    ?>
    <?php foreach($productNew as $product){
                $link="?ctrl=product&view=productdetail&product_id=".$product['product_id'];
                ?>
        <a href="<?=$link?>">
        <div class="sanpham">
            <div class="sanpham1">14%</div>
            <img src="public/user/img/<?=$product['image1']?>" alt="" class="anh1hover">
            <img src="public/user/img/<?=$product['image2']?>" alt="" class="anh2hover">
            <div class="hover-content">
                <div class="xn">Xem nhanh</div>
                <div class="sanpham1">14%</div>
            </div>
            <div class="gt"><?=$product['name']?></div>
            <div class="gia">
                <span class="giamgia">1,500,000₫</span>
                <span class="giamseo"><?=$product['price']?></span>
            </div>
            <form action="?ctrl=product&view=cart" method="post">
                <input type="hidden" name="product_id" value="<?=$product['product_id']?>">
                <input type="hidden" name="quantity" value="1">
                <input type="submit" name="addCart" class="add-to-cart" value="Thêm vào giỏ hàng">
            </form>
        </div>
        </a>
    <?php } ?>
</div>
</div>







<div class="trangdiem">
    <img src="public/user/img/tt.webp" alt="">
</div>



<div class="kt">
    <?php
    $limitedBlogs = array_slice($blogALL, 0, 3);
    ?>
    <?php foreach($limitedBlogs as $blog){ ?>
        <div class="card">
            <img src="public/user/img/<?=$blog['image']?>" alt="blog 1">
            <h3><?=$blog['title']?></h3>
            <div class="info">
                <span class="date"><?=$blog['post_date']?></span>
                <span class="category">F1GEN</span>
                <span class="comments">3 Comments</span>
            </div>
            <p><?=$blog['content']?></p>
            <a href="article.html" class="bt">Xem thêm</a>
        </div>
    <?php } ?>
</div>