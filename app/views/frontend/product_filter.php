<?php require_once FRONTEND_HEADER ?>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column-12">
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

                </div>
            </div>
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
<?php require_once FRONTEND_FOOTER; ?>