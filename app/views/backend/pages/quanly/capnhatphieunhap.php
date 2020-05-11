<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">


    <div class="modal" id="modalThemNCC" style="display:block">
        <div class="modal-content">
            <div class="form-header">Thêm phiếu nhập</div>
            <form class="myform" action="<?php echo URLROOT ?>/quanlynhap/sua" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="mylabel">Chọn nhà cung cấp <sup>*</sup></label>
                    <select name="manhacungcap" id="">
                        <?php foreach ($data['nhacungcap'] as $nhacungcap) : ?>
                            <option <?php if ($data['phieunhap']->manhacungcap = $nhacungcap->ma) echo 'selected' ?> value="<?php echo $nhacungcap->ma ?>"><?php echo $nhacungcap->ten ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group ">
                    <label class="mylabel"> Lý do nhập</label>
                    <input name="lydonhap" value="<?php echo $data['phieunhap']->lydonhap ?>" placeholder="Nhập lý do nhập">
                </div>
                <div class="myform-button">
                    <button type="submit" class="button-add">Cập nhật</button>
                    <a href="<?php echo URLROOT ?>/quanlynhap/index" class="button-close">Đóng</a>
                </div>
            </form>
        </div>
    </div>





</div>
<?php require_once(FOOTER); ?>