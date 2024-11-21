<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 20px;
        }

        .breadcrumb {
            background-color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .breadcrumb a {
            color: #007bff;
            text-decoration: none;
            margin-right: 5px;
        }

        .breadcrumb span {
            color: #555;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        .cart-table th, .cart-table td {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .cart-table th {
            background-color: #f8f9fa;
            color: #333;
            font-weight: 600;
        }

        .cart-table td {
            color: #555;
            font-size: 15px;
        }

        .product-info {
            display: flex;
            align-items: center;
            justify-content: start;
            text-align: left;
        }

        .product-image {
            width: 60px;
            height: 60px;
            margin-right: 15px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .product-name {
            font-size: 16px;
            color: #333;
            font-weight: 500;
        }

        .product-quantity-controls {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-btn {
            width: 32px;
            height: 32px;
            border: none;
            background-color: #e9ecef;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.1s;
            border-radius: 5px;
        }

        .quantity-btn:hover {
            background-color: #dee2e6;
            transform: scale(1.05);
        }

        .quantity-input {
            width: 40px;
            text-align: center;
            border: none;
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin: 0 5px;
        }

        .cart-total {
            text-align: right;
            padding: 20px;
            font-size: 18px;
            background-color: #fff;
            margin-top: 15px;
            border-radius: 8px;
            font-weight: bold;
            color: #333;
        }

        .checkout-btn {
            display: block;
            width: 100%;
            float: right;
            max-width: 200px;
            padding: 15px;
            background-color: #ff5757;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin: 20px auto 0;
            transition: background-color 0.3s, transform 0.2s;
            text-decoration: none;
        }

        .checkout-btn:hover {
            background-color: #ff3f3f;
            transform: translateY(-2px);
        }

        .product-price, .product-total, #total-price {
            color: #ff3333;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <h1>Giỏ hàng</h1>
    <table class="cart-table">
        <thead>
            <tr>
                <th>Thông tin sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody id="cart-items">
            <tr>
                <td class="product-info">
                    <img src="public/user/img/rm10.webp" alt="Product Image" class="product-image">
                    <span class="product-name">Sữa rửa mặt Senka</span>
                </td>
                <td class="product-price">80,000₫</td>
                <td class="product-quantity">
                    <div class="product-quantity-controls">
                        <button class="quantity-btn" onclick="decreaseQuantity()">-</button>
                        <input type="text" class="quantity-input" id="quantity" value="1" readonly>
                        <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                    </div>
                </td>
                <td class="product-total" id="product-total">80,000₫</td>
            </tr>
        </tbody>
    </table>
    <div class="cart-total">
        <span>Tổng tiền: </span><span id="total-price">80,000₫</span>
    </div>
   <a href="thanhtoan.html"> <button class="checkout-btn">Thanh toán</button></a>

    <script>
        const pricePerUnit = 80000; // Giá của sản phẩm

        function decreaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
                updateTotalPrice();
            }
        }

        function increaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            let quantity = parseInt(quantityInput.value);
            quantity++;
            quantityInput.value = quantity;
            updateTotalPrice();
        }

        function updateTotalPrice() {
            const quantity = parseInt(document.getElementById('quantity').value);
            const totalPrice = pricePerUnit * quantity;
            document.getElementById('product-total').textContent = `${totalPrice.toLocaleString()}₫`;
            document.getElementById('total-price').textContent = `${totalPrice.toLocaleString()}₫`;
        }
    </script>