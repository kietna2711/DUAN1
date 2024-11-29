<div class="table">
    <div class="title">
        <h1>Quản lý sản phẩm</h1>
        <a href="?ctrl=admin&view=add-product"><i class="fa-solid fa-plus"></i>Thêm mới</a>
    </div>
    <table id="userTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
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
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['sold'] ?></td>
                    <td>
                        <form method="POST" action="Admin.php?ctrl=admin&view=productadmin">
                            <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                            <input type="hidden" name="current_status" value="<?= $product['hidden'] ?>">
                            <button class="hidden" type="submit" name="toggle_status" class="btn-toggle">
                                <?= ($product['hidden'] === 'HIEN') ? 'Ẩn' : 'Hiện' ?>
                            </button>
                        </form>
                    </td>
                    <td>
                        <button class="btn-i">
                           <a class="fa-solid fa-pen-to-square" href="Admin.php?ctrl=admin&view=update-product&id=<?=$product['product_id']?>"></a>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
