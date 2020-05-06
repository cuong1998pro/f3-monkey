<?php require_once FRONTEND_HEADER ?>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column-12">
                <ul class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><?php echo $data->ten?></li>
                </ul>
            </div>

            <div class="thong-tin-chung">
                <div class="grid__column-5">
                    <div class="image-galery">
                        <img id="current-image" src="<?php echo URLROOT.'/backend/images/sanpham/'. $data->anh[0]->anh?>" alt="">

                        <div class="list-thumb-image">
                            <?php for($i=0; $i<sizeof($data->anh); $i++):?>
                            <div class="grid__column-2-4 thumb">
                                <img class="thumb-image" src="<?php echo URLROOT.'/backend/images/sanpham/'. $data->anh[$i]->anh?>" alt="">
                            </div>
                            <?php endfor?>
                        </div>
                    </div>
                </div>

                <div class="grid__column-7 thong-tin-san-pham">
                    <p class="ten-san-pham">
                        <?php echo $data->ten?>
                    </p>
                    <ul class="thong-tin-chi-tiet">
                        <li>Mã số: <span class="red"><?php echo $data->ma?></span></li>
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
                            <span class="thong-tin">Giá niên yết:</span> <span class="gia"><?php echo $data->giagoc?></span>
                        </div>
                        <div class="flex thong-tin-chi-tiet-gia">
                            <span class="thong-tin">Giá bán:</span> <span class="gia-ban"><?php echo $data->giaban?></span>
                        </div>
                        <hr class="my-hr">

                        <div class="flex thong-tin-chi-tiet-gia" style="display:flex; height:auto">
                            <span class="thong-tin">Khuyến mại:</span>
                            <ul class="khuyen-mai">
                                <?php foreach($data->khuyenmai as $km):?>
                                <li class="chi-tiet-khuyen-mai"><?php echo $km->khuyenmai?></li>
                                <?php endforeach;?>
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
            <div class="grid__column-12">
                <div class="my-label">Thông tin sản phẩm</div>
                <div class="thong-tin-chung chu-binh-thuong">
                    <div class="grid__column-7" style="border-right: 1.5px solid darkgray;">
                        <span class="info-header"> Mô tả sản phẩm</span>
                        <div class="chu-binh-thuong padding-text">
                            <?php echo $data->motasanpham ?>
                        </div>
                        <!-- <fade /> -->

                    </div>
                    <div class="grid__column-5">
                        <span class="info-header">Thông số sản phẩm</span>
                        <div class="cau-hinh">
                            <h3 class="msg__header"><?php echo $data->ten?></h3>
                            <table class="my-table">
                            <?php foreach($data->dsthongsokythuat as $thongso):?>
                                <tr>
                                    <th><?php echo $thongso->ten?></th>
                                    <td><?php echo $thongso->giatri?></td>
                               </tr>
                               <?php endforeach;?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__column-12">
                <div class="my-label">Đánh giá từ người mua</div>
                <p>Chức năng chưa phát triển</p>
            </div>
        </div>

    </div>
</div>


<?php require_once FRONTEND_FOOTER; ?>