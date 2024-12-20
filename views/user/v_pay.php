<div class="container">
        <!-- Left Section: Shipping Information -->
        <div class="left-section">
            <!-- <div class="breadcrumb">
                <a href="#">Giỏ hàng</a> > <span>Thông tin giao hàng</span>
            </div> -->
            <h2>Thông tin giao hàng</h2>
            <form>
                <label for="name">Họ và tên</label>
                <input type="text" id="name" placeholder="Nhập họ và tên">

                <div class="contact-group">
                    <input type="email" id="email" placeholder="Email">
                    <input type="text" id="phone" placeholder="Số điện thoại">
                </div>

                <label for="address">Địa chỉ</label>
                <input type="text" id="address" placeholder="Nhập địa chỉ">

                <!-- <div class="address-group">
                    <select id="province">
                        <option>Chọn tỉnh / thành</option>
                    </select>
                    <select id="district">
                        <option>Chọn quận / huyện</option>
                    </select>
                    <select id="ward">
                        <option>Chọn phường / xã</option>
                    </select>
                </div> -->

                <!-- <h3>Phương thức vận chuyển</h3>
                <div class="shipping-method">
                    <img src="public/user/img/Remove-bg.ai_1731231198757.png" alt="Shipping Icon">
                    <p>Vui lòng chọn tỉnh / thành để có danh sách phương thức vận chuyển.</p>
                </div> -->

                <h3>Phương thức thanh toán</h3>
                <div class="payment-method">
                    <input type="radio" id="cod" name="payment" checked>
                    <label for="cod">Thanh toán khi giao hàng (COD)</label>
                </div>
            </form>

            <div class="cart-complete-section">
                <a href="#" class="cart-link">Giỏ hàng</a>
                <!-- <button class="btn-complete-order">Hoàn tất đơn hàng</button> -->
            </div>
        </div>

        <!-- Right Section: Order Summary -->
        <div class="order-summary">
            <h3>Giỏ hàng</h3>
            <div class="order-item">
                <img src="public/user/img/sp1.webp" alt="Product Image">
                <span class="order-item-name">HADES MASCOT BLACK TOTE BAG</span>
                <span class="order-item-price">190,000₫</span>
            </div>

            <div class="discount-section">
                <input type="text" placeholder="Mã giảm giá">
            </div>

            <div class="loyalty-login-section">
                <span>Chương trình khách hàng thân thiết</span>
                <!-- <button class="login-button">Đăng nhập</button> -->
            </div>

            <div class="summary-section">
                <div>
                    <span>Tạm tính</span>
                    <span>190,000₫</span>
                </div>
                <div>
                    <span>Phí vận chuyển</span>
                    <span>-</span>
                </div>
            </div>

            <div class="total">
                Tổng cộng: 190,000₫
            </div>
            <div class="total">
            <input type="submit" value="Thanh toán">
            </div>
            
        </div>
    </div>