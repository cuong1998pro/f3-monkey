<?php require_once FRONTEND_HEADER ?>
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column-10">
                <h3 class="label-to">Lựa chọn hình thức thanh toán</h3>
                <div class="hinh-thuc-thanh-toan">
                    <div class="form-group">
                        <input type="radio" checked name="hinhthucthanhtoan" value="0" id="ht1">
                        <label for="ht1">Thanh toán khi nhận hàng</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="hinhthucthanhtoan" value="1" id="ht2">
                        <label for="ht2">Thanh toán qua chuyển khoản ngân hàng</label>
                    </div>
                    <hr>
                    <!-- <img src="<?php echo URLROOT ?>/frontend/img/sotaikhoan.jpg" alt=""> -->
                </div>
                <h3 class="label-to">Nhập thông tin nhận hàng</h3>
                <form method="post" action="<?php echo URLROOT ?>/donhang/them" class="form-thong-tin-nhan-hang">
                    <div class="form-group">
                        <label for=""> Họ tên *</label>
                        <input type="text" name="hoten">
                    </div>
                    <div class="form-group">
                        <label for=""> Số điện thoại *</label>
                        <input type="text" name="sodienthoai">
                    </div>
                    <div class="form-group">
                        <label for=""> Địa chỉ giao hàng*</label>
                        <textarea name="diachi" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for=""> Địa chỉ email </label>
                        <input type="text" name="email">
                    </div>
                    <div class="form-group">
                        <label for=""> Ghi chú</label>
                        <textarea name="diachi" cols="30" rows="5"></textarea>
                    </div>
                    <button class="mua-ngay" style="float:right">Đặt hàng ngay</button>
                </form>
            </div>
            <div class="grid__column-2">

                <div class="tong-gia">
                    <h3 class="label-to">Thông tin đơn hàng</h3>
                    <a href="<?php echo URLROOT?>/giohang/index">Chỉnh sửa</a>
                    <div class="thong-tin-san-pham-2">

                        <img src="<?php echo URLROOT ?>/backend/images/sanpham/1-1.jpg" alt="">
                        <p class="ten-san-pham">Tai nghe siêu sịn</p>
                        <div class="thanh-tien">
                            <span>150,000đ</span>
                            <span id="">x1</span>
                            <span>= 150,000đ</span>
                        </div>
                    </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once FRONTEND_FOOTER; ?>