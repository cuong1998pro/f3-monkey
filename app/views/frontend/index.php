<?php require_once FRONTEND_HEADER ?>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <?php require_once CATEGORY_LIST ?>
            <div class="grid__column-10">

                <!-- slideshow -->
                <div class="slideshow-container">
                    <?php foreach ($data['slider'] as $slider) : ?>
                        <div class="mySlides fade">
                            <img class="slide-image" src="<?php echo URLROOT . '/backend/images/' . $slider->anh ?>" style="width:100%; height:350px">
                        </div>
                    <?php endforeach; ?>
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

                    <?php foreach ($data['slider'] as $i => $slider) : ?>
                        <button class="slide-button btn" onclick="currentSlide(<?php echo $i + 1 ?>)"><?php echo $slider->noidung ?></button>

                    <?php endforeach; ?>

                </div>
                <!-- Bộ lọc sản phẩm -->

            </div>
        </div>
        <div class="grid__row app__content">
            <?php foreach ($data['banner'] as $i => $banner) : ?>
                <div class="banner-image">
                    <a href="<?php echo URLROOT . '/page/' . $banner->link ?>">
                        <img src="<?php echo URLROOT . '/backend/images/' . $banner->anh ?>" width="100%" alt="">
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="grid__row app__content">
            <?php foreach ($data['danhmuc'] as $danhmuc) : ?>

                <div class="category-view grid__column-12">
                    <h2 class="category-title"><?php echo $danhmuc->ten ?>
                    </h2>
                    <div class="category-nav-container">
                        <?php foreach ($data['thuonghieu'] as $thuonghieu) : ?>
                            <?php if ($thuonghieu->madanhmuc == $danhmuc->ma) : ?>
                                <a href="<?php echo URLROOT . '/page/thuong-hieu/' . $thuonghieu->link ?>" class="category-nav-link"><?php echo $thuonghieu->ten ?> </a>

                            <?php endif; ?>
                        <?php endforeach; ?>
                        <a href="<?php echo URLROOT . '/page/thuong-hieu/all' ?>" class="category-nav-link">Xem tất cả </a>
                    </div>

                </div>
                <div class="home-product">
                    <div class="grid__row">
                        <!-- Product Item -->
                        <div class="grid__column-2-4">
                            <a class="home-product-item" href="http://localhost/f3-monkey/page/sanpham">
                                <div class="home-product-item__img" style="background-image: url(https://img.vnshop.vn/height/350/media/catalog_v2/media/2/64/1579227644.457645_Samsung_Galaxy_Fold_CosmosBlack_1.jpg) ;"></div>
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
                            <a class="home-product-item" href="http://localhost/f3-monkey/page/sanpham">
                                <div class="home-product-item__img" style="background-image: url(https://lh3.googleusercontent.com/_5lqMJhnkHPcio5yjdqBpqwfb1wr4EZDCkPnykJm7yhXsTb_1_vdPP68CJX0QOD_BXurt-Z5Jfpylcu-2jI) ;"></div>
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
                            <a class="home-product-item" href="http://localhost/f3-monkey/page/sanpham">
                                <div class="home-product-item__img" style="background-image: url(https://lh3.googleusercontent.com/_5jJzoA4rlqKjr99RsENVFs9JOBGt8QX62hFfZCFVXy_pdk1PRcR_x7PQ5DW_dXnxuV3d0V8PbDSYBgs0i8) ;"></div>
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
                            <a class="home-product-item" href="http://localhost/f3-monkey/page/sanpham">
                                <div class="home-product-item__img" style="background-image: url(https://lh3.googleusercontent.com/wL-hPRYm-YR-Q0SBr1iOtvCbEoezBhcPg1t-a-64wrGT69Nt6L4LCbjd322mMDywYeK3_BHDDjZl06zhdqo) ;"></div>
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
                            <a class="home-product-item" href="http://localhost/f3-monkey/page/sanpham">
                                <div class="home-product-item__img" style="background-image: url(https://img.vnshop.vn/height/350/media/catalog_v2/media/14/1/1566006602.9511392_190800499.jpg)"></div>
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
                            <a class="home-product-item" href="http://localhost/f3-monkey/page/sanpham">
                                <div class="home-product-item__img" style="background-image: url(https://img.vnshop.vn/height/350/media/catalog_v2/media/21/81/1566874364.5884175_ien-Thoai-Di-ong-Samsung-Galaxy-A10s-SM-A107FZGDXEV-IC-1.jpg) ;"></div>
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
                            <a class="home-product-item" href="http://localhost/f3-monkey/page/sanpham">
                                <div class="home-product-item__img" style="background-image: url(https://img.vnshop.vn/height/350/media/catalog_v2/media/18/68/1571308074.0326054_ien-Thoai-Di-ong-Samsung-Galaxy-A50s-1.jpg) ;"></div>
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
                            <a class="home-product-item" href="http://localhost/f3-monkey/page/sanpham">
                                <div class="home-product-item__img" style="background-image: url(https://img.vnshop.vn/height/350/media/catalog_v2/media/13/39/1568277002.4584746_1.jpg) ;"></div>
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
                            <a class="home-product-item" href="http://localhost/f3-monkey/page/sanpham">
                                <div class="home-product-item__img" style="background-image: url(https://img.vnshop.vn/height/350/media/catalog_v2/media/79/84/1572257006.8445141_Realme-5-Pro-8GB128GB-1.jpg) ;"></div>
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
                            <a class="home-product-item" href="http://localhost/f3-monkey/page/sanpham">
                                <div class="home-product-item__img" style="background-image: url(https://img.vnshop.vn/height/350/media/catalog_v2/media/49/2/1565062519.9644933_190800033-2.jpg) ;"></div>
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
            <?php endforeach; ?>

        </div>
    </div>
</div>

<!--Modal đăng ký-->
<div id="myModal" class="modal">
    <div class="modal__body">
        <!--Register form-->
        <div class="auth-form">
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
        </div>
    </div>
</div>

<div id="myModal-2" class="modal">
    <div class="modal__body">
        <div class="auth-form">
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
                    <button id="close-2" class="btn btn-normal auth-form__control-back">TRỞ LẠI</button>
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
        </div>
    </div>
</div>
<?php require_once FRONTEND_FOOTER; ?>