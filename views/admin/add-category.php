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
                    <p>Tải ảnh danh mục:</p>
                    <input type="file" name="image">
                </div>
            </div>
            <div class="box-upload">
                <div class="upload">
                    <p>Tên danh mục:</p>
                    <input type="text" name="name" id="" placeholder="Nhập tên danh mục">
                </div>
                <div class="upload">
                    <p>Mô tả:</p>
                    <textarea name="description" id="" cols="40" rows="5" placeholder="Nhập nội dung"></textarea>
                </div>
            </div>
            <input type="submit" name="them" value="Thêm danh mục" id="">
</form>
    </main>