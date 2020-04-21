<?php require_once FRONTEND_HEADER ?>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column-12">
                <ul class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li>ABcxyz</li>
                </ul>
            </div>
            <div class="grid__column-12">
                <div>Thông tin sản phẩm</div>
            </div>
            <div class="thong-tin-chung">
                <div class="grid__column-5">
                    <div class="image-galery">
                        <img id="current-image" src="https://hanoicomputercdn.com/media/product/48195_tai_nghe_zidli_zh20_led_rgb_usb_1.jpg" alt="">

                        <div class="list-thumb-image">
                            <div class="grid__column-2-4 thumb">
                                <img class="thumb-image" src="https://hanoicomputercdn.com/media/product/120_48195_tai_nghe_zidli_zh20_led_rgb_usb_1.jpg" alt="">
                            </div>
                            <div class="grid__column-2-4 thumb">
                                <img class="thumb-image" src="https://hanoicomputercdn.com/media/product/120_48195_tai_nghe_zidli_zh20_led_rgb_usb_2.jpg" alt="">
                            </div>
                            <div class="grid__column-2-4 thumb">
                                <img class="thumb-image" src="https://hanoicomputercdn.com/media/product/120_48195_tai_nghe_zidli_zh20_led_rgb_usb_3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid__column-7 thong-tin-san-pham">
                    <p class="ten-san-pham">
                        Tai nghe Zidli ZH20 Led RGB USB
                    </p>
                    <ul class="thong-tin-chi-tiet">
                        <li>Mã số: <span class="red">123</span></li>
                        <li>
                            Đánh giá:
                            <span class="home-product-item__rating" style="margin-right:2px">
                                <i class="home-product-item__start-gold fas fa-star"></i>
                                <i class="home-product-item__start-gold fas fa-star"></i>
                                <i class="home-product-item__start-gold fas fa-star"></i>
                                <i class="home-product-item__start-gold fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </li>
                        <li>Lượt mua: 69</li>
                    </ul>
                    <div class="thong-tin-gia">
                        <div class="flex thong-tin-chi-tiet-gia">
                            <span class="thong-tin">Giá niên yết:</span> <span class="gia">2.000.000 đ</span>
                        </div>
                        <div class="flex thong-tin-chi-tiet-gia">
                            <span class="thong-tin">Giá bán:</span> <span class="gia-ban">2.000.000 đ</span>
                        </div>
                        <hr class="my-hr">

                        <div class="flex thong-tin-chi-tiet-gia" style="display:flex; height:auto">
                            <span class="thong-tin">Khuyến mại:</span>
                            <ul class="khuyen-mai">
                                <li class="chi-tiet-khuyen-mai">Đăng ký sớm! Nhận mã giảm giá tất cả sản phẩm đến 3 triệu! Duy nhất 21.02.2020. Áp dụng 2 ngày 22 - 23.04.2020</li>
                                <li class="chi-tiet-khuyen-mai">Giảm thêm 5% tối đa 200k khi thanh toán trực tuyến qua VNPAY-QR với mã F3-MONKEY</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-hr">
                    <div class="thong-tin-chi-tiet">Bảo hành: <span class="red"> 12 tháng</span></div>
                    <hr class="my-hr">
                    <span class="thong-tin-chi-tiet">Chọn số lượng: </span>
                    <div class="quantity">
                        <button class="number-button">-</button>
                        <input type="number" min="1" max="9" step="1" value="1">
                        <button class="number-button">+</button>
                    </div>
                    <div class="chon-mua">
                        <button class="mua-ngay">Mua ngay</button>
                        <a class="them-vao-gio">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php require_once FRONTEND_FOOTER; ?>