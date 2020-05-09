<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div class="modal" id="modalThemNCC" style="display:block">
    <div class="modal-content">
        <div class="form-header">Cận nhật ảnh</div>
        <form class="myform" action="<?php echo URLROOT ?>/anhsanpham/sua" method="POST" enctype="multipart/form-data">
            <div class="form-group ">
                <label class="mylabel">Ảnh cũ </label>
                <img src="<?php echo URLROOT . '/backend/images/sanpham/' . $data->anh ?>" alt="" width="300px">
            </div>
            <input type="hidden" name="tenanhcu" value="<?php echo $data->anh ?>">
            <div class="form-group ">
                <label class="mylabel">Chọn hình ảnh mới <sup>*</sup></label>
                <input type="file" name="anh">
            </div>
            <input type="hidden" name="ma" value="<?php echo $data->ma ?>">
            <div class="myform-button">
                <button type="submit" class="button-add">Cập nhật</button>
                <a href="<?php echo URLROOT ?>/anhsanpham/index/<?php echo $data->masanpham ?>" class="button-close">Đóng</a>
            </div>
        </form>
    </div>
</div>
</div>
<?php require_once(FOOTER); ?>