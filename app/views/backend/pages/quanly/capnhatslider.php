<?php checklogin() ?>
<?php require_once(HEADER); ?>


<div id="main-content" class="container">
    <!-- tên trang -->

    <!-- nút thên  sản phẩm -->
    <div class="modal" id="modalThemNCC" style="display:block">
        <div class="modal-content">
            <div class="form-header">Cập nhật Slider</div>
            <form class="myform" action="<?php echo URLROOT ?>/slider/sua/<?php echo $data->ma ?>" method="POST" enctype="multipart/form-data">

                <img src="<?php echo URLROOT . '/backend/images' . $data->anh ?>" alt="">
                <div class="form-group ">
                    <label class="mylabel">Hình ảnh <sup>*</sup></label>
                    <input type="File" name="anh">
                    <!-- input kieu file de up file -->
                </div>
                <div class="form-group ">
                    <label class="mylabel">Đường dẫn <sup>*</sup></label>
                    <input type="text" name="link" placeholder="Nhập đường dẫn" value="<?php echo $data->link ?>">
                </div>

                <div class="form-group ">
                    <label class="mylabel">Nội dung <sup>*</sup></label>
                    <input type="text" name="noidung" placeholder="Nhập người nội dung" value="<?php echo $data->noidung ?>">
                </div>

                <div class="myform-button">
                    <button type="submit" class="button-add"><i class="fas fa-plus" name="themNCC"></i>Cập nhật NCC</button>
                    <button type="button" id="closeThemNCC" class="button-close">Đóng</button>
                </div>
            </form>
        </div>
    </div>


</div>
<?php require_once(FOOTER); ?>