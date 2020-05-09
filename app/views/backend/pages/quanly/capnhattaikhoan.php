<?php checklogin() ?>
<?php require_once(HEADER); ?>
<div class="modal" id="modalCapNhatNCC" style="display:block">
    <div class="modal-content">
        <div class="form-header">Cập nhật thông tin tài khoản</div>
        <form class="myform" action="<?php echo URLROOT ?>/user/sua" method="post">
            <div class="form-group">
                <input type="hidden" name="ma" value="<?php echo $data['taikhoan']->ma ?>">
                <label class="mylabel">Tên tài khoản <sup>*</sup></label>
                <input type="text" name="ten" placeholder="Nhập tên nhà cung cấp" value="<?php echo $data['taikhoan']->ten ?>">
            </div>
            <div class="form-group ">
                <label class="mylabel">Tên hiển thị <sup>*</sup></label>
                <input type="text" name="tenhienthi" placeholder="Nhập số điện thoại" value="<?php echo $data['taikhoan']->tenhienthi ?>">
            </div>
            <div class="form-group ">
                <label class="mylabel">Mật khẩu mới <sup>*</sup></label>
                <input type="password" name="matkhau" placeholder="Nhập số điện thoại" >
            </div>
            <div class="form-group ">
                <label class="mylabel">Nhập lại mật khẩu mới <sup>*</sup></label>
                <input type="password" name="nhaplai" placeholder="Nhập số điện thoại" >
            </div>
            <div class="form-group ">
                <label class="mylabel" style="margin-top:0px">Loại tài khoản</label>
                <select name="maloaitaikhoan" id="">
                    <?php foreach ($data['loaitaikhoan'] as $loaitk) { ?>
                        <option value="<?php echo $loaitk->ma ?>" 
                        
                        ><?php echo $loaitk->tenloai ?></option>
                    <?php } ?>
                </select>
            </div>


            <div class="myform-button">
                <button type="submit" class="button-add">Cập nhật</button>
                <a href="<?php echo URLROOT ?>/nhacungcap/index" class="button-close">Đóng</a>
            </div>
        </form>
    </div>
</div>
<?php require_once(FOOTER); ?>