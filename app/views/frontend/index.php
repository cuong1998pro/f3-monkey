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
    <link rel="stylesheet" href="<?php echo URLROOT ?>/frontend/fonts/fontawesome/fontawesome-free-5.13.0-web/css/all.min.css">
    <script src="<?php echo URLROOT ?>/frontend/js/modal.js"></script>
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
                        <li class="header__navbar-item header__navbar-item--strong">Đăng nhập</li>
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
                                <a href="" class="view-cart btn btn--primary" style="float: right; margin:0 12px 12px;">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="fas fa-list-ul"></i> DANH MỤC
                            </h3>
                            <ul class="category-list">
                                <li class="category-item">
                                    <a href="" class="category-item-link">Laptop</a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item-link">Điện thoại</a>
                                </li>
                                <li class="category-item">
                                    <a href="" class="category-item-link">Phụ kiện điện thoại</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="grid__column-10">
                        <div class="home-filter">
                            <span class="home-filter-label">Sắp xếp theo</span>
                            <button class="home-filte__btn btn">Phổ biến</button>
                            <button class="home-filte__btn btn btn--primary">Mới nhất</button>
                            <button class="home-filte__btn btn">Bán chạy</button>
                            <div class="select-input">
                                <span for="gia" class="select-input-label">Giá</span>
                                <select id="gia">
                                    <option value="a"> </option>
                                    <option value="adec">Từ thấp đến cao</option>
                                    <option value="des">Từ cao đến thấp</option>
                                  </select>
                            </div>
                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-current">1</span>/14
                                </span>
                                <div class="home-filter__page-control">
                                    <a href="" class="home-filter__page-btn home-filter__page-btn--disable">
                                        <i class="home-filter__page-icon fas fa-angle-left"></i>
                                    </a>
                                    <a href="" class="home-filter__page-btn">
                                        <i class="home-filter__page-icon fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="home-product">
                            <div class="grid__row">
                                <!-- Product Item -->
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT ?>/frontend/img/s20.jpg) ;"></div>
                                        <h5 class="home-product-item__name">Điện Thoại Samsung Galaxy A71 8GB/128GB - Hàng Chính Hãng</h5>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.490.000đ</span>
                                            <span class="home-product-item__price-new">9.690.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-off far fa-heart"></i>
                                                <i class="home-product-item__like-icon-on fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Hàn Quốc</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">8%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT ?>/frontend/img/s20.jpg) ;"></div>
                                        <h5 class="home-product-item__name">Điện Thoại Samsung Galaxy A71 8GB/128GB - Hàng Chính Hãng</h5>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.490.000đ</span>
                                            <span class="home-product-item__price-new">9.690.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-off far fa-heart"></i>
                                                <i class="home-product-item__like-icon-on fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Hàn Quốc</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">8%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT ?>/frontend/img/s20.jpg) ;"></div>
                                        <h5 class="home-product-item__name">Điện Thoại Samsung Galaxy A71 8GB/128GB - Hàng Chính Hãng</h5>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.490.000đ</span>
                                            <span class="home-product-item__price-new">9.690.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-off far fa-heart"></i>
                                                <i class="home-product-item__like-icon-on fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Hàn Quốc</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">8%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT ?>/frontend/img/s20.jpg) ;"></div>
                                        <h5 class="home-product-item__name">Điện Thoại Samsung Galaxy A71 8GB/128GB - Hàng Chính Hãng</h5>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.490.000đ</span>
                                            <span class="home-product-item__price-new">9.690.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-off far fa-heart"></i>
                                                <i class="home-product-item__like-icon-on fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Hàn Quốc</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">8%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT ?>/frontend/img/s20.jpg) ;"></div>
                                        <h5 class="home-product-item__name">Điện Thoại Samsung Galaxy A71 8GB/128GB - Hàng Chính Hãng</h5>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.490.000đ</span>
                                            <span class="home-product-item__price-new">9.690.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-off far fa-heart"></i>
                                                <i class="home-product-item__like-icon-on fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Hàn Quốc</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">8%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT ?>/frontend/img/s20.jpg) ;"></div>
                                        <h5 class="home-product-item__name">Điện Thoại Samsung Galaxy A71 8GB/128GB - Hàng Chính Hãng</h5>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.490.000đ</span>
                                            <span class="home-product-item__price-new">9.690.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-off far fa-heart"></i>
                                                <i class="home-product-item__like-icon-on fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Hàn Quốc</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">8%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT ?>/frontend/img/s20.jpg) ;"></div>
                                        <h5 class="home-product-item__name">Điện Thoại Samsung Galaxy A71 8GB/128GB - Hàng Chính Hãng</h5>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.490.000đ</span>
                                            <span class="home-product-item__price-new">9.690.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-off far fa-heart"></i>
                                                <i class="home-product-item__like-icon-on fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Hàn Quốc</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">8%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT ?>/frontend/img/s20.jpg) ;"></div>
                                        <h5 class="home-product-item__name">Điện Thoại Samsung Galaxy A71 8GB/128GB - Hàng Chính Hãng</h5>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.490.000đ</span>
                                            <span class="home-product-item__price-new">9.690.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-off far fa-heart"></i>
                                                <i class="home-product-item__like-icon-on fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Hàn Quốc</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">8%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT ?>/frontend/img/s20.jpg) ;"></div>
                                        <h5 class="home-product-item__name">Điện Thoại Samsung Galaxy A71 8GB/128GB - Hàng Chính Hãng</h5>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.490.000đ</span>
                                            <span class="home-product-item__price-new">9.690.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-off far fa-heart"></i>
                                                <i class="home-product-item__like-icon-on fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Hàn Quốc</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">8%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT ?>/frontend/img/s20.jpg) ;"></div>
                                        <h5 class="home-product-item__name">Điện Thoại Samsung Galaxy A71 8GB/128GB - Hàng Chính Hãng</h5>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.490.000đ</span>
                                            <span class="home-product-item__price-new">9.690.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-off far fa-heart"></i>
                                                <i class="home-product-item__like-icon-on fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="home-product-item__start-gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Hàn Quốc</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">8%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination home-product__pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination-item-link">
                                    <i class="pagination-item-icon fas fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item__active">
                                <a href="" class="pagination-item-link">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item-link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item-link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item-link">...</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item-link">14</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item-link">
                                    <i class="pagination-item-icon fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Trung tâm trợ giúp</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Monkey - Shop mail</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Giới thiệu về Shop</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Tuyển dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Điều khoản</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Laptop</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Điện thoại</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Phụ kiện điện tử</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Theo dõi chúng tôi</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="fab fa-facebook"></i> Facebook
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="fab fa-instagram"></i> Instagram
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="fab fa-linkedin"></i> Linkedin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                        <div class="footer__download">
                            <img src="<?php echo URLROOT ?>/frontend/img/qr_code.png" alt="" class="footer__download-qr">
                            <div class="footer__download-apps">
                                <a href="" class="footer-apps-link">
                                    <img src="<?php echo URLROOT ?>/frontend/img/google_play.png" alt="" class="footer-apps">
                                </a>
                                <a href="" class="footer-apps-link">
                                    <img src="<?php echo URLROOT ?>/frontend/img/app_store.png" alt="" class="footer-apps">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="grid">
                    <p class="footer-text">Bản quyền thuộc về F3 - Monkey Shop</p>
                </div>
            </div>
        </footer>
    </div>
    <!--Modal đăng ký-->
    <!-- <div id="myModal" class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body"> -->
    <!--Register form-->
    <!-- <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Ký</h3>
                        <span class="auth-form__switch-btn">Đăng nhập</span>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__froup">
                            <input type="text" class="auth-form__input" placeholder="Nhập Email của bạn">
                        </div>
                        <div class="auth-form__froup">
                            <input type="text" class="auth-form__input" placeholder="Nhập UserName">
                        </div>
                        <div class="auth-form__froup">
                            <input type="text" class="auth-form__input" placeholder="Nhập PassWord">
                        </div>
                        <div class="auth-form__froup">
                            <input type="text" class="auth-form__input" placeholder="Nhập lại PassWord">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng ký, Bạn đã đồng ý với ShopHangHai về
                            <a href="" class="auth-form__policy-link">Điều khoản dịch vụ</a> &
                            <a href="" class="auth-form__policy-link">Chính sách bảo mật</a>
                        </p>
                    </div>

                    <div class="auth-form__control">
                        <button id="close" class="btn btn-normal auth-form__control-back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="https://www.facebook.com/" class="auth-form__socials-icon--facebook btn btn--size-s btn--with-icon" t>
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">Kết nối với Facebook</span>
                    </a>
                    <a href="https://accounts.google.com/" class="auth-form__socials-icon--google btn btn--size-s btn--with-icon" target="https://accounts.google.com/">
                        <i class="auth-form__socials-icon fab fa-google-plus"></i>
                        <span class="auth-form__socials-title">Kết nối với Google</span>
                    </a>
                </div>
            </div> -->

    <!--Login form-->
    <!-- <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch-btn">Đăng ký</span>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__froup">
                            <input type="text" class="auth-form__input" placeholder="Nhập UserName">
                        </div>
                        <div class="auth-form__froup">
                            <input type="text" class="auth-form__input" placeholder="Nhập PassWord">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot">Quên Mật Khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                        </div>
                    </div>

                    <div class="auth-form__control">
                        <button id="close" class="btn btn-normal auth-form__control-back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="https://www.facebook.com/" class="auth-form__socials-icon--facebook btn btn--size-s btn--with-icon" t>
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">Kết nối với Facebook</span>
                    </a>
                    <a href="https://accounts.google.com/" class="auth-form__socials-icon--google btn btn--size-s btn--with-icon" target="https://accounts.google.com/">
                        <i class="auth-form__socials-icon fab fa-google-plus"></i>
                        <span class="auth-form__socials-title">Kết nối với Google</span>
                    </a>
                </div>
            </div> -->
    <!-- </div>
    </div> -->
</body>

</html>