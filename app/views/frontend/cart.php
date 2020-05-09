<?php require_once FRONTEND_HEADER ?>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column-10">
                <div class="button-content">
                    <button class="mua-ngay" onclick="window.location.href='<?php echo URLROOT?>'">Tiếp tục muc hàng</button>
                    <button class="xoa-gio-hang">Xóa giỏ hàng</button>
                </div>
                <div class="san-pham">
                    <img src="http://localhost/f3-monkey/backend/images/sanpham/1-1.jpg" alt="">
                    <p class="ten-san-pham">Tai nghe Over-ear Somic G941 (Trắng)</p>
                    <a href=""><i class="fa fa-trash-alt"></i> Xóa khỏi giỏ hàng</a>
                    <div class="chon-so-luong">
                        <p class="gia-ban">100.000đ</p>
                        <div class="quantity">
                            <button class="number-button">-</button>
                            <input type="number" min="1" max="9" step="1" value="1">
                            <button class="number-button">+</button>
                        </div>
                    </div>
                </div>
                <button class="nut-xanh" style="margin:10px">Tải exel báo giá</button>
            </div>
            <div class="grid__column-2">
                <div class="tong-gia">
                    <table>
                        <tr>
                            <th>Tạm tính: </th>
                            <td>118.248.000đ</td>
                        </tr>
                        <tr>
                            <th>Giảm giá: </th>
                            <td>0đ</td>
                        </tr>
                        <tr style="border-bottom:1px solid rgba(0,0,0, 0.2)">
                            <th>Phí vận chuyển: </th>
                            <td>0đ</td>
                        </tr>

                        <tr>
                            <th>Thành tiền: </th>
                            <td style="color:red">118.248.000đ</td>
                        </tr>
                    </table>
                    <button class="mua-ngay">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once FRONTEND_FOOTER; ?>