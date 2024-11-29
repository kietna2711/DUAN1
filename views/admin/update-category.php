<form action="" method="post" enctype="multipart/form-data" class="table">
<?php foreach ($categoryALL as $category): ?>
            <div class="title">
                <h1>Cập nhật danh mục</h1>
            </div>
            <div class="box-upload">
                <div class="upload-image">
                    <p>Hình ảnh:</p>
                    <img src="public/user/img/<?= $category['image_url'] ?>" alt="">
                </div>
                <div class="upload">
                    <p>Tải ảnh danh mục:</p>
                    <input type="file" name="image">
                </div>
            </div>
            <div class="box-upload">
                <div class="upload">
                    <p>Tên danh mục:</p>
                    <input type="text" name="name" id="" placeholder="Nhập tên danh mục" value="<?= $category['category_name'] ?>">
                </div>
                <div class="upload">
                    <p>Mô tả:</p>
                    <textarea name="description" id="" cols="40" rows="5" placeholder="Nhập nội dung"><?= $category['description'] ?></textarea>
                </div>
            </div>
            <input type="submit" name="update" value="Cập nhật danh mục" id="">
<?php endforeach; ?>
</form>
    </main>