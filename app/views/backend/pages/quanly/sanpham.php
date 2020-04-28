<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Danh Mục</a></li>
        <li>Sản phẩm </li>
    </ul>
    <button class="button-primary" id="themNCC"><i class="fas fa-plus"></i> Thêm</button>

    <!-- Modal them nha cung cap -->
    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm sản phẩm</div>
            <form class="myform" action="<?php echo URLROOT ?>/Sanpham/them" method="POST">
                <div class="form-group">
                    <label class="mylabel">Tên sản phẩm  <sup>*</sup></label>
                    <input type="text" name="ten" placeholder="Nhập sản phẩm ">
                </div>
                <div class="form-group">
                    <label class="mylabel"> Ảnh<sup>*</sup></label>
                    <input type="text" name="anh" placeholder="Nhập ảnh">
                </div>
                <div class="form-group">
                    <label class="mylabel">Mã danh mục <sup>*</sup></label>
                    <input type="text" name="madanhmuc" placeholder="Nhập mã danh mục">
                </div>
                <div class="form-group">
                    <label class="mylabel">Mô tả <sup>*</sup></label>
                    <input type="text" name="mota" placeholder="Nhập Mô tả">
                </div>
                <div class="form-group">
                    <label class="mylabel">Màu sắc<sup>*</sup></label>
                    <input type="text" name="mausac" placeholder="Nhập màu săc ">
                </div>
                <div class="form-group">
                    <label class="mylabel">Lựa chọn<sup>*</sup></label>
                    <input type="text" name="luachon" placeholder="Nhập lựa chọn">
                </div>
                <div class="form-group">
                    <label class="mylabel">Giá niên yết<sup>*</sup></label>
                    <input type="text" name="gianienyet" placeholder="Nhập giá niên yết">
                </div>

                <div class="form-group">
                    <label class="mylabel">Nội dung <sup>*</sup></label>
                    <input type="text" name="noidung" placeholder="Nhập Nội dung">
                </div>

                <div class="form-group">
                    <label class="mylabel">Tình trạng <sup>*</sup></label>
                    <input type="text" name="tingtrang" placeholder="Nhập Tình trạng">
                </div>
                <div class="form-group">
                    <label class="mylabel">Khuyến mãi  <sup>*</sup></label>
                    <input type="text" name="khuyenmai" placeholder="Nhập Khuyến mãi ">
                </div>
                <div class="form-group">
                    <label class="mylabel">thông tin chi tiết <sup>*</sup></label>
                    <input type="text" name="thongtinchitiet" placeholder="Nhập thông tin chi tiết">
                </div>
                <div class="form-group">
                    <label class="mylabel">thông số kĩ thuật<sup>*</sup></label>
                    <input type="text" name="thongsokythuat" placeholder="Nhập thông số kĩ thuật">
                </div>
                
    
                <div class="myform-button">
                    <button type="submit" class="button-add"><i class="fas fa-plus" name="themNCC"></i>Thêm sản phẩm </button>
                    <button type="button" id="closeThemNCC" class="button-close">Đóng</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Modal cap nhat nha cung cap -->


    <a class="button-primary" href="<?php echo URLROOT . '/Sanpham/in' ?>"><i class="fas fa-print"></i> In</a>
    <form action="" class="search-box">
        <div class="form-group" style="display: flex;">
            <input id="search-box" type="text" name="search" placeholder="Tìm kiếm">
            <button class="button-primary">Tìm kiếm</button>
        </div>
    </form>
    <div class="mytable">
        <table>
            <thead>
                <tr>
                    <th>Mã số</th>
                    <th>Tên</th>
                    <th>Ảnh</th>
                    <th>Mã danh mục</th>
                    <th>Mô tả</th>
                    <th>màu sắc</th>
                    <th>lựa chọn</th>
                    <th>Giá niên yết</th>
                    <th>Nội dung </th>
                    <th>Tình trạng</th>
                    <th>Khuyến mãi</th>
                    <th>Thông tin chi tiết </th>
                    <th>Thông số kỹ thuật</th>
                    <th width="90px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $data ?>


            </tbody>
        </table>

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