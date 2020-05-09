<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">

    <!-- nút thên  sản phẩm -->
    <div class="modal" id="modalThemNCC" style="display:block">
        <div class="modal-content">
            <div class="form-header">Cập nhật</div>
            <form class="myform" action="<?php echo URLROOT ?>/loaisanpham/sua" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="mylabel">Tên loại sản phẩm <sup>*</sup></label>
                    <input type="text" name="ten" placeholder="Nhập tên" value="<?php echo $data->ten ?>">
                </div>
                <div class="form-group ">
                    <label class="mylabel"> Ghi chú<sup>*</sup></label>
                    <input type="text" name="ghichu" placeholder="Nhập ghi chú" value="<?php echo $data->ghichu ?>">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Đường dẫn <sup>*</sup></label>
                    <input type="text" name="link" placeholder="Nhập đường dẫn" value="<?php echo $data->link ?>">
                </div>
                <input type="hidden" name="ma" value="<?php echo $data->ma?>">
                <div class="myform-button">
                    <button type="submit" class="button-add">Cập nhật</button>
                    <a href="<?php echo URLROOT ?>/loaisanpham/index" class="button-close">Đóng</a>
                </div>
            </form>
        </div>
    </div>


</div>
<?php require_once(FOOTER); ?>