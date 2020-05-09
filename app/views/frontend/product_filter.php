<?php require_once FRONTEND_HEADER ?>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column-12">
                <div class="home-filter">
                    <span class="home-filter-label">Sắp xếp theo</span>
                    <button class="home-filte__btn btn">Phổ biến</button>
                    <button class="home-filte__btn btn btn--primary">Mới nhất</button>
                    <button style="margin-right:30px" class="home-filte__btn btn">Bán chạy</button>
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
            <div class="home-product">
                <div class="grid__row">
                    <!-- Product Item -->
                    <?php foreach ($data['sanpham'] as $sanpham) : ?>
                        <div class="grid__column-2-4">
                            <a class="home-product-item" href="http://localhost/f3-monkey/sanpham/chi-tiet-san-pham/<?php echo $sanpham->ma ?>">
                                <div class="home-product-item__img" style="background-image: url(<?php echo URLROOT . '/backend/images/sanpham/' . $sanpham->anh ?>) ;"></div>
                                <h5 class="home-product-item__name"><?php echo $sanpham->ten ?></h5>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old"><?php echo $sanpham->giagoc ?></span>
                                    <span class="home-product-item__price-new"><?php echo $sanpham->giaban ?></span>
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
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>
</div>
<?php require_once FRONTEND_FOOTER; ?>