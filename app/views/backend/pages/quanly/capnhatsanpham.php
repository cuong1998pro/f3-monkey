<?php checklogin() ?>
<?php require_once(HEADER); ?>
<div class="modal" id="modalCapNhatNCC" style="display:block">
    <div class="modal-content">
        <div class="form-header">Cập nhật nhà cung cấp</div>
        <form class="myform" action="<?php echo URLROOT ?>/Sanpham/sua" method="post">
            <div class="form-group">
                <input type="hidden" name="ma" value="<?php echo $data->ma?>">
                <label class="mylabel">Tên  <sup>*</sup></label>
                <input  type="text" name="ten" placeholder="Nhập tên nhà cung cấp" value="<?php echo $data->ten?>">
            </div>

            <div class="form-group">
                    <label class="mylabel"> Ảnh<sup>*</sup></label>
                    <input type="text" name="anh" placeholder="Nhập ảnh" value="<?php echo $data->anh?>">
                </div>
                <div class="form-group">
                    <label class="mylabel">Mã danh mục <sup>*</sup></label>
                    <input type="text" name="madanhmuc" placeholder="Nhập mã danh mục" value="<?php echo $data->madanhmuc?>">
                </div>
                <div class="form-group">
                    <label class="mylabel">Mô tả <sup>*</sup></label>
                    <input type="text" name="mota" placeholder="Nhập Mô tả" value="<?php echo $data->mota?>">
                </div>
                <div class="form-group">
                    <label class="mylabel">Màu sắc<sup>*</sup></label>
                    <input type="text" name="mausac" placeholder="Nhập màu săc " value="<?php echo $data->mausac?>">
                </div>
                <div class="form-group">
                    <label class="mylabel">Lựa chọn<sup>*</sup></label>
                    <input type="text" name="luachon" placeholder="Nhập lựa chọn" value="<?php echo $data->anh?>">
                </div>
                <div class="form-group">
                    <label class="mylabel">Giá niên yết<sup>*</sup></label>
                    <input type="text" name="gianienyet" placeholder="Nhập giá niên yết" value="<?php echo $data->gianienyet?>">
                </div>

                <div class="form-group">
                    <label class="mylabel">Nội dung <sup>*</sup></label>
                    <input type="text" name="noidung" placeholder="Nhập Nội dung" value="<?php echo $data->noidung?>">
                </div>

                <div class="form-group">
                    <label class="mylabel">Tình trạng <sup>*</sup></label>
                    <input type="text" name="tingtrang" placeholder="Nhập Tình trạng" value="<?php echo $data->tingtrang?>">
                </div>
                <div class="form-group">
                    <label class="mylabel">Khuyến mãi  <sup>*</sup></label>
                    <input type="text" name="khuyenmai" placeholder="Nhập Khuyến mãi " value="<?php echo $data->khuyenmai?>">
                </div>
                <div class="form-group">
                    <label class="mylabel">thông tin chi tiết <sup>*</sup></label>
                    <input type="text" name="thongtinchitiet" placeholder="Nhập thông tin chi tiết" value="<?php echo $data->thongtinchitiet?>">
                </div>
                <div class="form-group">
                    <label class="mylabel">thông số kĩ thuật<sup>*</sup></label>
                    <input type="text" name="thongsokythuat" placeholder="Nhập thông số kĩ thuật" value="<?php echo $data->thongsokythuat?>">
                </div>
        </form>
    </div>
</div>
<?php require_once(FOOTER); ?>
