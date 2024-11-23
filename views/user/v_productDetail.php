<div class="tong">
            <div class="product-container">
                <div class="flash-sale">
                    <img src="public/user/img/sale.gif" alt="Sale Icon"> <span id="flashSaleTimer">Loading...</span>
                    <a href="danhmuc.html">Xem toàn bộ sản phẩm flash-sale</a>
                </div>
    <?php foreach ($productDetail as $detail) { ?>
        <div class="sanphamchinh">
                    <div class="sanpham2">
                        <img id="anhtong" src="public/user/img/<?=$detail['image1']?>" alt="Main Product Image">
                        <div class="sanphamphu">
                            <img src="public/user/img/<?=$detail['image1']?>" alt="Thumbnail 1" onclick="changeImage('public/user/img/<?=$detail['image1']?>')"
                                class="active">
                            <img src="public/user/img/<?=$detail['image2']?>" alt="Thumbnail 2" onclick="changeImage('public/user/img/<?=$detail['image2']?>')">
                        </div>
                    </div>
                    <div class="gioithieu">
                        <h1 class="gioithieu1"><?=$detail['name']?></h1>
                        <div class="thuonghieu">
                            <div class="th">
                                <ul>
                                    <li><strong>Mã sản phẩm:</strong> Đang cập nhật</li>
                                    <li><strong>Thương hiệu:</strong> IMAGE</li>
                                </ul>
                            </div>
                            <div class="th">
                                <ul>
                                    <li><strong>Barcode:</strong> Đang cập nhật</li>
                                    <li><strong>Dòng sản phẩm:</strong> Kem Dưỡng Da Mặt</li>
                                </ul>
                            </div>
                        </div>
                        <p class="giagoc">3,705,000 </p>
                        <span class="price-sale"><?=$detail['price']?></span>
                        <p class="tk"> Tiết kiệm 14%</p>
                        <div class="size">
                            <P>Mô tả:<?=$detail['description']?></P>
                        </div>
                        <div class="quantity-wrapper">
                            <p>Số Lượng</p>
                            <div class="quantity">
                                <button onclick="changeQuantity(-1)">-</button>
                                <input type="number" id="quantity" value="1" min="1">
                                <button onclick="changeQuantity(1)">+</button>
                            </div>
                        </div>
                        
                        <div class="muathem">
                            Mua thêm <span>500,000</span> để được miễn phí giao hàng trên toàn quốc
                        </div>
                        <div class="add-to-cart-section">
                            <div class="add-to-cart">
                                <p>THÊM VÀO GIỎ</p>
                                <span>Chọn ngay sản phẩm bạn yêu thích</span>
                            </div>
                            <div class="other-actions">
                                <div class="button consult">
                                    <p>TƯ VẤN</p>
                                    <span>Tư vấn sản phẩm tùy chọn</span>
                                </div>
                                <div class="button contact">
                                    <p>Giỏ hàng</p>
                                    <span>Thêm giỏ hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php } ?>
                <div class="product-section">
                    <h2>Sản phẩm liên quan</h2>
                    <div class="product-list">
                    <?php
                    $limitedproductGY = array_slice($productGY, 0,5);
                    ?>
                        <?php foreach ($limitedproductGY as $GY) {
                            $link="?ctrl=product&view=productdetail&product_id=".$GY['product_id'];
                            ?>
                            <a href="<?=$link?>">
                            <div class="sanpham">
                                <div class="sanpham1">14%</div>
                                <img src="public/user/img/<?=$GY['image1']?>" alt="" class="anh1hover">
                                <img src="public/user/img/<?=$GY['image2']?>" alt="" class="anh2hover">
                                <div class="hover-content">
                                    <div class="xn">Xem nhanh</div>
                                    <div class="sanpham1">14%</div>
                                </div>
                                <div class="gt"><?=$GY['name']?></div>
                                <div class="gia">
                                    <span class="giamgia">1,500,000₫</span>
                                    <span class="giamseo"><?=$GY['price']?></span>
                                </div>
                                <button class="add-to-cart">Thêm vào giỏ hàng</button>
                            </div>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="itemtong">
                    <a href=""><div class="item1"><span>Mô tả sản phẩm</span></div></a>
                    <a href=""><div class="item">Chính sách bảo mật</div></a>
                    <a href=""><div class="item">Chính sách đổi trả</div></a>
                    <a href=""><div class="item">Điều khoản dịch vụ</div></a>
                    </div>

                </div>
                    <div class="description-container">
                        <p>Nội dung đang được cập nhật</p>
                    </div>
                    <!-- <h2>Sản phẩm đã xem</h2> -->
                    <!-- <div class="product-list">
                        <div class="sanpham">
                            <div class="sanpham1">14%</div>
                            <img src="public/user/img/rm11.webp" alt="" class="anh1hover">
                            <img src="public/user/img/rm12.webp" alt="" class="anh2hover">
                            <div class="hover-content">
                                <div class="xn">Xem nhanh</div>
                                <div class="sanpham1">14%</div>
                            </div>
                            <div class="giohang">Thêm vào giỏ</div>
                            <div class="gt">Kem Dưỡng Da Mặt Trẻ Hóa Da Image AGELESS Total Retinol A Crème</div>
                            <div class="gia">
                                <span class="giamgia">2,500,000₫</span>
                                <span class="giamseo">2,160,000₫</span>
                            </div>
                        </div>



                        <div class="sanpham">
                            <div class="sanpham1">14%</div>
                            <img src="public/user/img/rm13.webp" alt="" class="anh1hover">
                            <img src="public/user/img/rm14.webp" alt="" class="anh2hover">
                            <div class="hover-content">
                                <div class="xn">Xem nhanh</div>
                                <div class="sanpham1">14%</div>
                            </div>
                            <div class="giohang">Thêm vào giỏ</div>
                            <div class="gt">Kem Dưỡng Da Mặt Trẻ Hóa Da Image The MAX Stem Cell Crème</div>
                            <div class="gia">
                                <span class="giamgia">3,705,000₫</span>
                                <span class="giamseo">3,220,000₫</span>
                            </div>
                        </div>

                        <div class="sanpham">
                            <div class="sanpham1">14%</div>
                            <img src="public/user/img/rm15.webp" alt="" class="anh1hover">
                            <img src="public/user/img/rm16.webp" alt="" class="anh2hover">
                            <div class="hover-content">
                                <div class="xn">Xem nhanh</div>
                                <div class="sanpham1">14%</div>
                            </div>
                            <div class="giohang">Thêm vào giỏ</div>
                            <div class="gt">Serum Trẻ Hóa Da Chống Lão Hóa Image The MAX Stem Cell Serum</div>
                            <div class="gia">
                                <span class="giamgia">3,700,000₫</span>
                                <span class="giamseo">3,185,000₫</span>
                            </div>
                        </div>

                        <div class="sanpham">
                            <div class="sanpham1">14%</div>
                            <img src="public/user/img/rm5.webp" alt="" class="anh1hover">
                            <img src="public/user/img/rm6.webp" alt="" class="anh2hover">
                            <div class="hover-content">
                                <div class="xn">Xem nhanh</div>
                                <div class="sanpham1">14%</div>
                            </div>
                            <div class="giohang">Thêm vào giỏ</div>
                            <div class="gt">Kem Dưỡng Da Mặt Chống Lão Hóa Image AGELESS Total Repair Crème</div>
                            <div class="gia">
                                <span class="giamgia">2,500,000₫</span>
                                <span class="giamseo">2,190,000₫</span>
                            </div>
                        </div>


                        <div class="sanpham">
                            <div class="sanpham1">14%</div>
                            <img src="public/user/img/rm3.webp" alt="" class="anh1hover">
                            <img src="public/user/img/rm4.webp" alt="" class="anh2hover">
                            <div class="hover-content">
                                <div class="xn">Xem nhanh</div>
                                <div class="sanpham1">14%</div>
                            </div>
                            <div class="giohang">Thêm vào giỏ</div>
                            <div class="gt">Kem Dưỡng Body Trẻ Hóa Da Toàn Thân Image BODY SPA Rejuvenating Body Lotion
                            </div>
                            <div class="gia">
                                <span class="giamgia">1,400,000₫</span>
                                <span class="giamseo">1,190,000₫</span>
                            </div>
                        </div>

                    </div> -->
                </div>


            </div>
            <script>
            // Countdown Timer for Flash Sale
            function startCountdown(durationDays) {
                const countdownElement = document.getElementById("flashSaleTimer");
                let countdownDate = new Date().getTime() + durationDays * 24 * 60 * 60 * 1000;

                const interval = setInterval(function () {
                    let now = new Date().getTime();
                    let distance = countdownDate - now;

                    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    countdownElement.innerHTML = `${days} Ngày ${hours} Giờ ${minutes} Phút ${seconds} Giây`;

                    // If the countdown is over, stop the timer
                    if (distance < 0) {
                        clearInterval(interval);
                        countdownElement.innerHTML = "Hết thời gian";
                    }
                }, 1000);
            }

            // Start countdown with 149 days
            startCountdown(149);

            // Image switcher
            function changeImage(src) {
                document.getElementById('anhtong').src = src;
                const thumbnails = document.querySelectorAll('.sanphamphu img');
                thumbnails.forEach(img => img.classList.remove('active'));
                document.querySelector(`.sanphamphu img[src="${src}"]`).classList.add('active');
            }

            // Quantity adjustment
            function changeQuantity(amount) {
                const quantityInput = document.getElementById('quantity');
                let newQuantity = parseInt(quantityInput.value) + amount;
                quantityInput.value = newQuantity > 0 ? newQuantity : 1;
            }

        </script>