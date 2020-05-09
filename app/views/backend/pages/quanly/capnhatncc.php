<?php checklogin() ?>
<?php require_once(HEADER); ?>
<div class="modal" id="modalCapNhatNCC" style="display:block">
    <div class="modal-content">
        <div class="form-header">Cập nhật nhà cung cấp</div>
        <form class="myform" action="<?php echo URLROOT ?>/nhacungcap/sua" method="post">
            <div class="form-group">
                <input type="hidden" name="ma" value="<?php echo $data->ma?>">
                <label class="mylabel">Tên nhà cung cấp <sup>*</sup></label>
                <input  type="text" name="ten" placeholder="Nhập tên" value="<?php echo $data->ten?>">
            </div>
            <div class="form-group ">
                <label class="mylabel">Số điện thoại <sup>*</sup></label>
                <input  type="text" name="sodienthoai" placeholder="Nhập số điện thoại" value="<?php echo $data->sodienthoai?>">
            </div>
            <div class="form-group ">
                <label class="mylabel">Địa chỉ <sup>*</sup></label>
                <textarea id="my-textarea" name="diachi" rows="2" placeholder="Nhập địa chỉ"><?php echo $data->diachi?></textarea>
            </div>
            <div class="form-group ">
                <label class="mylabel" style="margin-top:0px">Email</label>
                <input  type="text" name="email" placeholder="Nhập email" value="<?php echo $data->email?>">
            </div>
            <div class="form-group ">
                <label class="mylabel">Người liên hệ <sup>*</sup></label>
                <input  type="text" name="nguoilienhe" placeholder="Nhập người liên hệ" value="<?php echo $data->nguoilienhe?>">
            </div>

            <div class="myform-button">
                <button type="submit" class="button-add">Cập nhật</button>
                <a href="<?php echo URLROOT?>/nhacungcap/index" class="button-close">Đóng</a>
            </div>
        </form>
    </div>
</div>
<?php require_once(FOOTER); ?>
