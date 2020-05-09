<?php checklogin() ?>
<?php require_once(HEADER); ?>

    <div class="modal" id="modalThemNCC" style="display:block">
        <div class="modal-content">
            <div class="form-header">Cận nhật thông số sản phẩm</div>
            <form class="myform" action="<?php echo URLROOT ?>/thongsosanpham/sua" method="POST" enctype="multipart/form-data">
         
                <div class="form-group">
                    <label class="mylabel">Tên thông số <sup>*</sup></label>
                    <input type="text" name="ten" placeholder="Nhập tên" value="<?php echo $data->ten?>">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Giá trị <sup>*</sup></label>
                    <input type="text" name="giatri" value="<?php echo $data->giatri?>">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Mã sản phẩm <sup>*</sup></label>
                    <input type="text" disabled name="masanpham" value="<?php echo $data->masanpham?>">
                </div>
                <input type="hidden" name="ma" value="<?php echo $data->ma?>">

                <div class="myform-button">
                    <button type="submit" class="button-add">Cập nhật</button>
                    <a href="<?php echo URLROOT ?>/thongsosanpham/index/<?php echo $data->masanpham?>" class="button-close">Đóng</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once(FOOTER); ?>