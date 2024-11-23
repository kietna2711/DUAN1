<div class="table">
    <div class="title">
        <h1>Quản lý danh mục</h1>
        <a href="?ctrl=admin&view=add-category"><i class="fa-solid fa-plus"></i>Thêm mới</a>
    </div>
    <table id="userTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Số lượng</th>
                        <th>Lượt bán</th>
                        <th>Ẩn</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
        </thead>
        <tbody>
            <?php foreach ($getALLProduct as $product): ?>
                <tr>
                    <td><?= $product['product_id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td>
                        <img src="public/user/img/<?= $product['image1'] ?>" alt="Product Image">
                        <img src="public/user/img/<?= $product['image2'] ?>" alt="Product Image">
                    </td>
                    <td><?= $product['description'] ?></td>
                    <td><?= $product['quantity'] ?></td>
                    <td><?= $product['sold'] ?></td>
                    <td>
                        <input type="checkbox" <?= $product['quantity'] == 0 ? 'disabled' : '' ?>>
                    </td>
                    <td>
                        <button class="btn-i">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
