<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">

    <div class="modal" id="modalThemNCC" style="display:block">
        <div class="modal-content">
            <div class="form-header">Cập nhật thương hiệu</div>
            <form class="myform" action="<?php echo URLROOT ?>/thuonghieu/sua" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="mylabel">Tên thương hiệu <sup>*</sup></label>
                    <input type="text" name="ten" placeholder="Nhập tên" value="<?php echo $data['thuonghieu']->ten ?>">
                </div>
                <div class="form-group ">
                    <label class="mylabel"> Ghi chú<sup>*</sup></label>
                    <input type="text" name="ghichu" placeholder="Nhập ghi chú" value="<?php echo $data['thuonghieu']->ghichu ?>">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Đường dẫn <sup>*</sup></label>
                    <input type="text" name="link" placeholder="Nhập đường dẫn" value="<?php echo $data['thuonghieu']->link ?>">
                </div>
                <input type="hidden" value="<?php echo $data['thuonghieu']->ma ?>" name="ma">
                <div class="form-group ">
                    <label class="mylabel">Chọn danh mục <sup>*</sup></label>
                    <select name="madanhmuc" id="">
                        <?php foreach ($data['danhmuc'] as $danhmuc) : ?>
                            <option <?php if ($danhmuc->ma == $data['thuonghieu']->madanhmuc) echo 'selected' ?> value="<?php echo $danhmuc->ma ?>"><?php echo $danhmuc->ten ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="myform-button">
                    <button type="submit" class="button-add">Cập nhật</button>
                    <a href="<?php echo URLROOT ?>/thuonghieu/index" class="button-close">Đóng</a>
                </div>
            </form>
        </div>
    </div>




    <!-- <div class="right">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div> -->
</div>
<?php require_once(FOOTER); ?>