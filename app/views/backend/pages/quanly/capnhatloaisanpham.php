<?php checklogin() ?>
<?php require_once(HEADER); ?>
<div class="modal" id="modalCapNhatNCC" style="display:block">
    <div class="modal-content">
        <div class="form-header">Cập nhật loại sản phẩm</div>
        <form class="myform" action="<?php echo URLROOT ?>/Loaisanpham/sua" method="post">
            <div class="form-group">
                <input type="hidden" name="ma" value="<?php echo $data->ma?>">
                <label class="mylabel">Tên loại sản phẩm <sup>*</sup></label>
                <input  type="text" name="ten" placeholder="Nhập tên loại sản phẩm" value="<?php echo $data->ten?>">
            </div>
            <div class="form-group ">
                <label class="mylabel">ảnh loại sản phẩm <sup>*</sup></label>
                <input  type="text" name="sodienthoai" placeholder="Nhập ảnh loại sản phẩm" value="<?php echo $data->anh?>">
            </div>
            <div class="form-group ">
                <label class="mylabel">đường dẫn<sup>*</sup></label>
                <textarea id="my-textarea" name="diachi" rows="2" placeholder="Nhập đường dẫn"><?php echo $data->link?></textarea>
            </div>

            <div class="myform-button">
                <button type="submit" class="button-add"><i class="fas fa-plus"></i>Cập nhật loại sản phẩm</button>
                <a href="<?php echo URLROOT?>/Loaisanpham/index" class="button-close">Đóng</a>
            </div>
        </form>
    </div>
</div>
<?php require_once(FOOTER); ?>
