<?php require_once(FRONTEND_HEADER) ?>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <?php require_once(CATEGORY_LIST) ?>
            <div class="grid__column-10">

                <!-- slideshow -->
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img class="slide-image" src="<?php echo URLROOT ?>/frontend/img/slide-1.png" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img class="slide-image" src="<?php echo URLROOT ?>/frontend/img/slide-2.png" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img class="slide-image" src="<?php echo URLROOT ?>/frontend/img/slide-3.png" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img class="slide-image" src="<?php echo URLROOT ?>/frontend/img/slide-4.png" style="width:100%">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div style=" text-align: center;postion: relative;z-index: 1;position: relative;margin-top: -40px;">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                </div>
                <div style=" text-align: center;postion: relative;z-index: 1;position: relative; margin-top:25px">
                    <button class="slide-button btn slide-button-active" onclick="currentSlide(1)">Sản phẩm chính hãng</button>
                    <button class="slide-button btn" onclick="currentSlide(2)">Nguồn gốc rõ ràng</button>
                    <button class="slide-button btn" onclick="currentSlide(3)">Đổi trả 30 ngày</button>
                    <button class="slide-button btn" onclick="currentSlide(4)">Phục vụ tận tình</button>
                </div>
                <!-- Bộ lọc sản phẩm -->
               
            </div>
        </div>
        <div class="grid__row app__content">
                    <div class="banner-image">
                        <a href="http://google.com">
                            <img src="<?php echo URLROOT ?>/frontend/img/slide-4.png" width="100%" alt="">
                        </a>
                    </div>
                    <div class="banner-image">
                        <a href="http://google.com">
                            <img src="<?php echo URLROOT ?>/frontend/img/slide-4.png" width="100%" alt="">
                        </a>
                    </div>
                    <div class="banner-image">
                        <a href="http://google.com">
                            <img src="<?php echo URLROOT ?>/frontend/img/slide-4.png" width="100%" alt="">
                        </a>
                    </div>
                </div>
                <div class="grid__row app__content">

                    <div class="category-view grid__column-12">
                        <h2 class="category-title">Điện thoại
                        </h2>
                        <div class="category-nav-container">
                            <a href="#" class="category-nav-link">Iphone </a>
                            <a href="#" class="category-nav-link">Oppo</a>
                            <a href="#" class="category-nav-link">Xiaomi</a>
                            <a href="#" class="category-nav-link">Xem tất cả &gt;</a>
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
                </div>
    </div>
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
<?php require_once(FRONTEND_FOOTER); ?>