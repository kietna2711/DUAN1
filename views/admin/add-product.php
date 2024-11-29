        
        
        <form action="" method="post" enctype="multipart/form-data" class="table">
        <div class="title">
                <h1>Thêm sản phẩm mới</h1>
            </div>
            <div class="box-upload">
                <!-- <div class="upload-image">
                    <p>Hình ảnh:</p>
                    <img src="public/admin/img/sanpham1.webp" alt="">
                </div> -->
                <div class="upload">
                    <p>Ảnh sản phẩm:</p>
                    <input type="file" name="image1">
                </div>
            </div>
            <div class="box-upload">
                <!-- <div class="upload-image">
                    <p>Hình ảnh:</p>
                    <img src="public/admin/img/sanpham1.webp" alt="">
                </div> -->
                <div class="upload">
                    <p>Ảnh sản phẩm hover:</p>
                    <input type="file" name="image2">
                </div>
            </div>
            <div class="box-upload">
                <div class="upload">
                    <p>Danh mục:</p>
                    <!-- <select name="" id="">
                        <option value="Khách">Sữa tắm</option>
                        <option value="Khách">Phấn trang điểm</option>
                        <option value="Khách">Thực phẩm chứ năng</option>
                    </select> -->
                    <select name="iddm" id="">
                    <?php foreach ($getALLCategory as $category): ?>
                        <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="upload">
                    <p>Giá:</p>
                    <input type="number" name="price" id="" placeholder="Nhập giá">
                </div>
            </div>
            <div class="box-upload">
                <div class="upload">
                    <p>Tên sản phẩm:</p>
                    <input type="text" name="name" id="" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="upload">
                    <p>Mô tả:</p>
                    <textarea name="description" id="" cols="40" rows="5" placeholder="Nhập nội dung"></textarea>
                </div>
            </div>
            <input type="submit" name="them" value="Thêm sản phẩm" id="">
        </form>
        <!-- <div class="table">

        </div> -->
    </main>