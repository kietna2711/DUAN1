<div class="table">
    <div class="title">
        <h1>Quản lý người dùng</h1>
    </div>
    <table id="userTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên người dùng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getALLUser as $user): ?>
                <tr>
                    <td><?= ($user['user_id']) ?></td>
                    <td><?= ($user['name']) ?></td>
                    <td><?= ($user['phone'] ?: 'Chưa có thông tin') ?></td>
                    <td><?= ($user['email']) ?></td>
                    <td><?= ($user['address'] ?: 'Chưa có thông tin') ?></td>
                    <td>
                        <select name="" id="">
                            <option value="User" <?= ($user['role'] == 'User') ? 'selected' : '' ?>>User</option>
                            <option value="Admin" <?= ($user['role'] == 'Admin') ? 'selected' : '' ?>>Admin</option>
                        </select>
                    </td>
                    <td><button class="btn">Sửa</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
