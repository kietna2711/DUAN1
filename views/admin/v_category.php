
        <div class="table">
            <div class="title">
                <h1>Quản lý danh mục</h1>
                <a href="?ctrl=admin&view=add-category"><i class="fa-solid fa-plus"></i>Thêm mới</a>
            </div>
            <table id="userTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Hình ảnh danh mục</th>
                        <th>Mô tả</th>
                        <!-- <th>Số lượng sản phẩm</th> -->
                        <th>Ẩn</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <?php foreach ($getALLCategory as $category): ?>
                    <tr>
                        <td><?= $category['category_id'] ?></td>
                        <td><?= $category['category_name'] ?></td>
                        <td>
                            <img src="public/user/img/<?= $category['image_url'] ?>" alt="">
                        </td>
                        <td><?= $category['description'] ?></td>
                        <!-- <td>120</td> -->
                        <td>
                            <form method="POST" action="Admin.php?ctrl=admin&view=categoryadmin">
                                <input type="hidden" name="category_id" value="<?= $category['category_id'] ?>">
                                <input type="hidden" name="current_status" value="<?= $category['hidden'] ?>">
                                <button class="hidden" type="submit" name="toggle_status" class="btn-toggle">
                                    <?= ($category['hidden'] === 'HIEN') ? 'Ẩn' : 'Hiện' ?>
                                </button>
                            </form>
                        </td>
                        <td><button class="btn-i">
                           <a class="fa-solid fa-pen-to-square" href="Admin.php?ctrl=admin&view=update-category&id=<?=$category['category_id']?>"></a>
                        </button></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>