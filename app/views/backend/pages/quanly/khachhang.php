<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Danh Mục</a></li>
        <li>Khách hàng</li>
    </ul>
    <button class="button-primary" id="themNCC"><i class="fas fa-plus"></i> Thêm</button>

    <!-- Modal them nha cung cap -->
    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm khách hàng</div>
            <form class="myform" action="<?php echo URLROOT ?>/Khachhang/them" method="POST">
                <div class="form-group">
                    <label class="mylabel">Tên đăng nhập <sup>*</sup></label>
                    <input type="text" name="tendangnhap" placeholder="Nhập tên đăng nhập">
                </div>
                <div class="form-group ">
                    <label class="mylabel">họ tên <sup>*</sup></label>
                    <input type="text" name="hoten" placeholder="Nhập họ tên">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Địa chỉ <sup>*</sup></label>
                    <textarea id="my-textarea" name="diachi" rows="2" placeholder="Nhập địa chỉ"></textarea>
                </div>
                <div class="form-group ">
                    <label class="mylabel">Số điện thoại <sup>*</sup></label>
                    <input type="text" name="sodienthoai" placeholder="Nhập số điện thoại">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Mật khẩu<sup>*</sup></label>
                    <input type="text" name="matkhau" placeholder="Nhập mật khẩu">
                </div>

                <div class="myform-button">
                    <button type="submit" class="button-add"><i class="fas fa-plus" name="themNCC"></i>Thêm Khách hàng</button>
                    <button type="button" id="closeThemNCC" class="button-close">Đóng</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Modal cap nhat nha cung cap -->


    <a class="button-primary" href="<?php echo URLROOT . '/Khachhang/in' ?>"><i class="fas fa-print"></i> In</a>
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
                    <th>Tên đăng nhập</th>
                    <th>Họ tên </th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Mật khẩu</th>
                    <th width="90px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                
                <?php echo ($data); ?>


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