
<form action="" method="post" enctype="multipart/form-data" class="table">
<?php foreach ($productALL as $product): ?>
    <div class="title">
        <h1>Cập nhật phẩm mới</h1>
    </div>
    <div class="box-upload">
        <div class="upload-image">
            <p>Hình ảnh:</p>
            <img src="public/user/img/<?= $product['image1'] ?>" alt="">
        </div>
        <div class="upload">
            <p>Ảnh sản phẩm:</p>
            <input type="file" name="image1">
        </div>
    </div>
    <div class="box-upload">
        <div class="upload-image">
            <p>Hình ảnh hover:</p>
            <img src="public/user/img/<?= $product['image2'] ?>" alt="">
        </div>
        <div class="upload">
            <p>Ảnh sản phẩm hover:</p>
            <input type="file" name="image2">
        </div>
    </div>
    <div class="box-upload">
        <div class="upload">
            <p>Danh mục:</p>
            <select name="iddm" id="">
                <?php foreach ($getALLCategory as $category): ?>
                    <option value="<?= $category['category_id'] ?>" <?= $category['category_id'] == $product['category_id'] ? 'selected' : '' ?>><?= $category['category_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="upload">
            <p>Giá:</p>
            <input type="number" name="price" value="<?= $product['price'] ?>" placeholder="Nhập giá">
        </div>
    </div>
    <div class="box-upload">
        <div class="upload">
            <p>Tên sản phẩm:</p>
            <input type="text" name="name" value="<?= $product['name'] ?>" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="upload">
            <p>Mô tả:</p>
            <textarea name="description" cols="40" rows="5" placeholder="Nhập nội dung"><?= $product['description'] ?></textarea>
        </div>
    </div>
    <input type="submit" name="update" value="Cập nhật sản phẩm">
    <?php endforeach; ?>
</form>
