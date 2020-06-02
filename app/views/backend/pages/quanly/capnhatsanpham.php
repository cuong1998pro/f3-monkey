<?php checklogin() ?>
<?php require_once(HEADER); ?>
<div class="modal" id="modalCapNhatNCC" style="display:block">
    <div class="modal-content">
        <div class="form-header">Cập nhật thông tin sản phẩm</div>
        <form class="myform" action="<?php echo URLROOT ?>/sanpham/sua" method="post">
            <input type="hidden" name="ma" value="<?php echo $data['sanpham']->ma ?>">
            <div class="form-group">
                <label class="mylabel">Tên sản phẩm <sup>*</sup></label>
                <input type="text" name="ten" placeholder="Nhập tên sản phẩm " value="<?php echo $data['sanpham']->ten ?>">
            </div>
            <div class="form-group">
                <label class="mylabel">Danh mục <sup>*</sup></label>
                <select name="madanhmuc" id="">
                    <?php foreach ($data['danhmuc'] as $danhmuc) : ?>
                        <option <?php echo $danhmuc->ma == $data['sanpham']->madanhmuc ? 'selected' : '' ?> value="<?php echo $danhmuc->ma ?>">
                            <?php echo $danhmuc->ten ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label class="mylabel">Thương hiệu <sup>*</sup></label>
                <select name="mathuonghieu" id="">
                    <?php foreach ($data['thuonghieu'] as $thuonghieu) : ?>
                        <option <?php echo $thuonghieu->ma == $data['sanpham']->mathuonghieu ? 'selected' : '' ?> value="<?php echo $thuonghieu->ma ?>">
                            <?php echo $thuonghieu->ten ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label class="mylabel">Mô tả <sup>*</sup></label>
                <textarea id="my-textarea" name="mota" rows="2" placeholder="Nhập địa chỉ"><?php echo $data['sanpham']->motasanpham ?></textarea>
                <script>
                    CKEDITOR.replace('mota');
                </script>
            </div>
            <div class="form-group">
                <label class="mylabel">Tình trạng <sup>*</sup></label>
                <select name="tinhtrang" id="">
                    <option value="1">Mới</option>
                    <option value="2">Cũ 99%</option>
                    <option value="3">Cũ 80%</option>
                </select>
            </div>

            <div class="myform-button">
                <button type="submit" class="button-add">Cập nhật</button>
                <a href="<?php echo URLROOT ?>/sanpham/index" class="button-close">Đóng</a>
            </div>
        </form>
    </div>
</div>

<?php require_once(FOOTER); ?>