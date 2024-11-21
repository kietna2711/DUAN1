<div class="danhsach1">
        <div class="filter-sidebar">
            <div class="filter-group">
                <h3>Thương hiệu sản phẩm</h3>
                <input type="checkbox" name="brand" value="image"> IMAGE
            </div>
            <div class="filter-group">
                <h3>Loại sản phẩm</h3>
                <label><input type="checkbox" name="type" value="chong-nang-body"> Chống Nắng Body</label><br>
                <label><input type="checkbox" name="type" value="kem-duong-body"> Kem Dưỡng Body</label><br>
                <label><input type="checkbox" name="type" value="Mat-na"> Mặt Nạ</label><br>
                <label><input type="checkbox" name="type" value="kem-duong-Da-Mat"> Kem Dưỡng Da Mặt</label><br>
                <label><input type="checkbox" name="type" value="Tay-Da-Chet-body"> Tẩy Da Chết Body</label><br>
                <label><input type="checkbox" name="type" value="Serum"> Serum</label><br>
                <hr>
            </div>
            
            <div class="filter-group">
                <h3>Giá sản phẩm</h3>
                <label><input type="checkbox" name="type"> Dưới 1,000,000₫</label><br>
                <label><input type="checkbox" name="type"> Từ 1,000,000₫ - 3,000,000₫</label><br>
                <label><input type="checkbox" name="type"> Từ 3,000,000₫ - 5,000,000₫</label><br>
                <label><input type="checkbox" name="type"> Từ 5,000,000₫ - 10,000,000₫</label><br>
                <label><input type="checkbox" name="type"> Trên 10,000,000₫</label><br>
            </div>            
        </div>
        <div class="product-container">
            <div class="sort-options">
                <span>Sắp xếp theo:</span>
                <select name="sort" id="sort">
                    <option >Mặc định</option>
                    <option >A -> Z</option>
                    <option >Z -> A</option>
                    <option >Giá Tăng Dần</option>
                    <option >Giá Giảm Dần</option>
                    <option >Hàng Cữ Nhất</option>
                    <option >Hàng Mới Nhất</option>
                </select>
            </div>
        </div>
        <!-- <div class="chuqc">
            <h1>Chống lão hóa</h1>
            <p>Max Mara, PUMA, Ted Baker, DSQUARED, Topman... mang đến sự thoải mái, năng động nhưng cũng không kém phần trẻ trung, sang trọng. Quần thể thao, quần jeans, quần kaki hay quần short là những "must-have-items" trong tủ đồ của các quý ông sành điệu.</p>
        </div> -->
        <div class="th1">
            <?php foreach($dsproduct as $product){?>
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
                    <button class="add-to-cart">Thêm vào giỏ hàng</button>
                </div>
            <?php } ?>
        </div>      
        <div class="pagination">
        <?php
            // Kiểm tra xem biến $countProduct đã được khởi tạo và là một mảng chưa
            if (isset($countProduct) && is_array($countProduct)) {
                // Tính số trang
                $sotrang = floor(count($countProduct) / 4); 
                if (count($countProduct) % 4 != 0) {
                    $sotrang += 1;  // Nếu số sản phẩm không chia hết cho 4, cần thêm một trang nữa
                }

                // Hiển thị các trang
                for ($i = 1; $i <= $sotrang; $i++) {
                    $link = "?";
                    foreach ($_GET as $key => $value) {
                        if ($key != "trang") {
                            $link .= $key . "=" . $value . "&";
                        }
                    }
                    $link .= "trang=" . $i;
                    echo "<a href=\"$link\">$i</a>";
                }
            }
        ?>

        </div>

