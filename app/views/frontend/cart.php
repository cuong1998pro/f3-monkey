<?php require_once FRONTEND_HEADER ?>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column-10">
                <div class="button-content">
                    <button class="mua-ngay" onclick="window.location.href='<?php echo URLROOT ?>'">Tiếp tục muc hàng</button>
                    <button onclick="location.href='<?php echo URLROOT . '/giohang/xoatoanbo' ?>'" class="xoa-gio-hang">Xóa giỏ hàng</button>
                </div>
                <? if (($data['giohang']) != null) : ?>
                    <?php $tongcong = 0; ?>

                    <?php foreach ($data['giohang'] as $sanpham) : ?>
                        <div class="san-pham">
                            <img src="<?php echo URLROOT . '/backend/images/sanpham/' . $sanpham['anh'] ?>" alt="">
                            <p class="ten-san-pham"><?php echo substr($sanpham['ten'], 0, 35).'...' ?></p>
                            <a href=""><i class="fa fa-trash-alt"></i> Xóa khỏi giỏ hàng</a>
                            <div class="chon-so-luong">
                                <?php $tongcong += $sanpham['dongia'] ?>
                                <p class="gia-ban"><?php echo number_format($sanpham['dongia']) . 'đ' ?></p>
                                <div class="quantity">
                                    <button class="number-button" onclick="location.href='<?php echo URLROOT . '/giohang/giamsoluong/' . $sanpham['masanpham'] ?>'">-</button>
                                    <?php $tongcong += $sanpham['soluong'] ?>
                                    <input type="number" min="1" max="9" step="1" value="<?php echo ($sanpham['soluong']) ?>">
                                    <button class="number-button" onclick="location.href='<?php echo URLROOT . '/giohang/tangsoluong/' . $sanpham['masanpham'] ?>'">+</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <? endif; ?>
                <button class="nut-xanh" style="margin:10px">Tải exel báo giá</button>
            </div>
            <div class="grid__column-2">
                <div class="tong-gia">
                    <table>
                        <tr>
                            <th>Tạm tính: </th>
                            <td><?php echo number_format($tongcong) . 'đ' ?></td>
                        </tr>
                        <tr>
                            <th>Giảm giá: </th>
                            <td>0đ</td>
                        </tr>
                        <tr style="border-bottom:1px solid rgba(0,0,0, 0.2)">
                            <th>Phí vận chuyển: </th>
                            <td>40.000đ</td>
                        </tr>

                        <tr>
                            <th>Thành tiền: </th>
                            <td style="color:red"><?php echo number_format($tongcong - 40000) . 'đ' ?></td>
                        </tr>
                    </table>
                    <button class="mua-ngay" onclick="location.href='<?php echo URLROOT.'/webshop/thanh-toan'?>'">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once FRONTEND_FOOTER; ?>