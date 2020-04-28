<?php
var_dump($data);
die();
?>
<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Danh mục</a></li>
        <li>Sản phẩm</li>
    </ul>
    <button class="button-primary" id="themNCC"><i class="fas fa-plus"></i> Thêm</button>

    <!-- Modal them nha cung cap -->
    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm sản phẩm</div>
            <form class="myform" action="<?php echo URLROOT ?>/sanpham/them" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="mylabel">Tên sản phẩm <sup>*</sup></label>
                    <input type="text" name="ten" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Hình ảnh <sup>*</sup></label>
                    <input type="file" name="anh" >
                </div>
                <div class="form-group ">
                    <label class="mylabel">Danh mục <sup>*</sup></label>
                    <select name="madanhmuc" >
                        <?php foreach($dsdm as $data->danhmuc) ?>
                        <option value="<?php echo $danhmuc->value?>"><?php echo $danhmuc->ten?></option>
                        <?php ?>
                    </select>
                </div>
                <div class="form-group ">
                    <label class="mylabel">Mô tả <sup>*</sup></label>
                    <textarea id="my-textarea" name="diachi" rows="2" placeholder="Nhập địa chỉ"></textarea>
                </div>
                <div class="form-group ">
                    <label class="mylabel" style="margin-top:0px">Email</label>
                    <input type="text" name="email" placeholder="Nhập email">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Người liên hệ <sup>*</sup></label>
                    <input type="text" name="nguoilienhe" placeholder="Nhập người liên hệ">
                </div>

                <div class="myform-button">
                    <button type="submit" class="button-add"><i class="fas fa-plus" name="themNCC"></i>Thêm NCC</button>
                    <button type="button" id="closeThemNCC" class="button-close">Đóng</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Modal cap nhat nha cung cap -->


    <a class="button-primary" href="<?php echo URLROOT . '/sanpham/in' ?>"><i class="fas fa-print"></i> In</a>
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
                    <th>Tên NCC</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Người liên hệ</th>
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