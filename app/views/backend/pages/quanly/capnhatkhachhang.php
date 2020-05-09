<?php checklogin() ?>
<?php require_once(HEADER); ?>
<div class="modal" id="modalCapNhatNCC" style="display:block">
    <div class="modal-content">
        <div class="form-header">Cập nhật khách hàng</div>
        <form class="myform" action="<?php echo URLROOT ?>/khachhang/sua" method="post">
            <div class="form-group">
                <input type="hidden" name="ma" value="<?php echo $data->ma?>">
                <label class="mylabel">Tên đăng nhập <sup>*</sup></label>
                <input  type="text" name="tendangnhap" placeholder="Nhập tên đăng nhập " value="<?php echo $data->tendangnhap?>">
            </div>

            <div class="form-group ">
                    <label class="mylabel">họ tên <sup>*</sup></label>
                    <input type="text" name="hoten" placeholder="Nhập họ tên" value="<?php echo $data->hoten?>">
            </div>

            <div class="form-group ">
                    <label class="mylabel">Địa chỉ <sup>*</sup></label>
                    <textarea id="my-textarea" name="diachi" rows="2" placeholder="Nhập địa chỉ" ><?php echo $data->diachi?></textarea>
             </div>

            <div class="form-group ">
                <label class="mylabel">Số điện thoại <sup>*</sup></label>
                <input  type="text" name="sodienthoai" placeholder="Nhập số điện thoại" value="<?php echo $data->sodienthoai?>">
            </div>

            <div class="form-group ">
                    <label class="mylabel">Mật khẩu<sup>*</sup></label>
                    <input type="text" name="matkhau" placeholder="Nhập mật khẩu" value="<?php echo $data->matkhau?>">
            </div>
        
            <div class="myform-button">
                <button type="submit" class="button-add">Cập nhật khách hàng</button>
                <a href="<?php echo URLROOT?>/Khachhang/index" class="button-close">Đóng</a>
            </div>
        </form>
    </div>
</div>
<?php require_once(FOOTER); ?>
