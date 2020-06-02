<?php checklogin() ?>
<?php require_once(HEADER); ?>


<div id="main-content" class="container">
    
    <div class="modal" id="modalThemNCC" style="display:block">
        <div class="modal-content">
            <div class="form-header">Cập nhật bảng giá</div>
            <form class="myform" action="<?php echo URLROOT ?>/banggia/sua" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="ma" value="<?php echo $data['banggia']->ma ?>">
                <div class="form-group ">
                    <label class="mylabel">Mã sản phẩm <sup>*</sup></label>
                    <input type="text" name="masanpham" value="<?php echo $data['banggia']->masanpham ?>" readonly>
                </div>

                <div class="form-group ">
                    <label class="mylabel">Giá bán <sup>*</sup></label>
                    <input type="number" name="gia" value="<?php echo isset($data['banggia']->gia)? $data['banggia']->gia:0 ?>">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Giá giảm <sup>*</sup></label>
                    <input type="text" name="giamgia" value="<?php echo isset($data['banggia']->giamgia)? $data['banggia']->giamgia:0 ?>">
                </div>

                <div class="myform-button">
                    <button type="submit" class="button-add">Cập nhật</button>
                    <a href="<?php echo URLROOT ?>/banggia/index" class="button-close">Đóng</a>
                </div>
            </form>
        </div>
    </div>


</div>
<?php require_once(FOOTER); ?>