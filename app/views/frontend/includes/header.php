<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestShop_LinhNguyen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/frontend/css/base.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/frontend/css/main.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/frontend/css/product_detail.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/frontend/css/giohang.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/frontend/fonts/fontawesome/fontawesome-free-5.13.0-web/css/all.min.css">
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-qr header__navbar-item--separate">
                            Vào của hàng trên ứng dụng của F3 - Monkey
                            <div class="header__qr">
                                <img src="<?php echo URLROOT ?>/frontend/img/qr_code.png" alt="QR Code" class="header__qr-img">
                                <div class="header__qr-apps">
                                    <a href="https://shopee.vn/web" class="header__qr-link" target="blank">
                                        <img src="<?php echo URLROOT ?>/frontend/img/google_play.png" alt="Google Play" class="header__qr-apps--download">
                                    </a>
                                    <a href="https://shopee.vn/web" class="header__qr-link" target="blank">
                                        <img src="<?php echo URLROOT ?>/frontend/img/app_store.png" alt="App Store" class="header__qr-apps--download">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-item--no-pointer">Kết Nối</span>
                            <a href="" class="header__navbar-icon-link"><i class="header__navbar-icon fab fa-facebook"></i></a>
                            <a href="" class="header__navbar-icon-link"><i class="header__navbar-icon fab fa-instagram"></i></a>
                        </li>
                    </ul>
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-bell"></i> Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông Báo Mới Nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-iteam header__notify-iteam--viewed ">
                                        <a href="" class="header__notify-link">
                                            <img src="<?php echo URLROOT ?>/frontend/img/s20.jpg" alt="SamSung" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Điện thoại SamSung Galaxy UltralHD</span>
                                                <span class="header__notify-descriotion">Có tiền hãng nên mua</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-iteam header__notify-iteam--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="<?php echo URLROOT ?>/frontend/img/s20.jpg" alt="SamSung" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Điện thoại SamSung Galaxy S20+ UltralHD chụp ảnh zoom 100x</span>
                                                <span class="header__notify-descriotion">Có tiền hãng nên mua</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-iteam">
                                        <a href="" class="header__notify-link">
                                            <img src="<?php echo URLROOT ?>/frontend/img/s20.jpg" alt="SamSung" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Điện thoại SamSung Galaxy UltralHD</span>
                                                <span class="header__notify-descriotion">Có tiền hãng nên mua</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="" class="header__notify-footer--btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-question-circle"></i> Trợ giúp
                            </a>
                        </li>
                        <li id="myBtn" class="header__navbar-item header__navbar-item--strong header__navbar-item--separate" onclick="">Đăng ký</li>
                        <li id="myBtn-2" class="header__navbar-item header__navbar-item--strong">Đăng nhập</li>
                        <!-- <li class="header__navbar-item header__navbar-user">
                            <img src="<?php echo URLROOT ?>/frontend/img/s20.jpg" alt="" class="header__navbar-user-img">
                            <span class="header__navbar-user-name">Linh Nguyễn</span>
                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item"><a href="">Tài khoản của tôi</a></li>
                                <li class="header__navbar-user-item"><a href="">Địa chỉ của tôi</a></li>
                                <li class="header__navbar-user-item"><a href="">Đơn mua</a></li>
                                <li class="header__navbar-user-item"><a href="">Đăng xuất</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <!-- Header with search -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="indenx.html" class="header__logo-link">
                            <img src="<?php echo URLROOT ?>/frontend/img/logoshop_n.png" alt="" class="header__logo-img">
                        </a>
                    </div>
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Nhập để tìm kiếm sản phẩm">
                            <!-- Search History -->
                            <div class="header__search-histroy">
                                <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Laptop</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="">Điện thoại</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="">SamSung</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header__search-selection">
                            <span class="header__search-selection-label">Trong Shop</span>
                            <i class="header__search-selection-icon fas fa-angle-down"></i>
                            <ul class="header__search-option">
                                <li class="header__search-option-item header__search-option-item--active">
                                    <span>Trong Shop</span>
                                    <i class="fas fa-check"></i>
                                </li>
                                <li class="header__search-option-item">
                                    <span>Ngoài Shop</span>
                                    <i class="fas fa-check"></i>
                                </li>
                            </ul>
                        </div>
                        <button class="header__search-btn">
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>
                    <!-- Cart layout -->
                    <div class="header__cart">
                        <div class="header__cart-wrap">
                            <i class="header__cart-icon fas fa-shopping-cart"></i>
                            <span class="header__cart-notice">3</span>
                            <!-- No cart: header__cart-list-no-cart -->
                            <div class="header__cart-list">
                                <img src="<?php echo URLROOT ?>/frontend/img/empty-cart.png" alt="" class="header__cart-no-cart-img">
                                <span class="header__cart-list-no-cart-msg">Chưa có sản phẩm</span>
                                <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                <ul class="header__cart-list-item">
                                    <!-- Cart item -->
                                    <li class="header__cart-item">
                                        <img src="<?php echo URLROOT ?>/frontend/img/s20.jpg" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Điện thoại Sam Sung galaxy s20</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">22 000 000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">1</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: Siêu phẩm
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="<?php echo URLROOT ?>/frontend/img/s20.jpg" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Điện thoại Sam Sung galaxy s20</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">22 000 000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">1</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: Siêu phẩm
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="<?php echo URLROOT ?>/frontend/img/s20.jpg" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Điện thoại Sam Sung galaxy s20</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">22 000 000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">1</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: Siêu phẩm
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="<?php echo URLROOT?>/giohang" class="view-cart btn btn--primary" style="float: right; margin:0 12px 12px;">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>