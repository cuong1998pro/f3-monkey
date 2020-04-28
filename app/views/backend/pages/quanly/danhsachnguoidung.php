<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Hệ thống</a></li>
        <li>Danh sách người dùng</li>
    </ul>
    <button class="button-primary" id="themNCC"><i class="fas fa-plus"></i> Thêm</button>

    <!-- Modal them nha cung cap -->
    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm người dùng</div>
            <form class="myform" action="<?php echo URLROOT ?>/user/them" method="POST">
                <div class="form-group">
                    <label class="mylabel">Tên tài khoản <sup>*</sup></label>
                    <input type="text" name="ten" placeholder="Nhập tên tài khoản">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Tên hiển thị <sup>*</sup></label>
                    <input type="text" name="tenhienthi" placeholder="Nhập tên hiển thị">
                </div>
                <div class="form-group ">
                    <label class="mylabel" style="margin-top:0px">Mật khẩu</label>
                    <input type="password" name="matkhau" placeholder="Nhập mật khẩu">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Loại tài khoản <sup>*</sup></label>
                    <select name="maloaitaikhoan" id="">
                        <?php foreach ($data['loaitaikhoan'] as $loaitk) { ?>
                            <option value="<?php echo $loaitk->ma ?>"><?php echo $loaitk->tenloai ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="myform-button">
                    <button type="submit" class="button-add"><i class="fas fa-plus" name="themNCC"></i>Thêm NCC</button>
                    <button type="button" id="closeThemNCC" class="button-close">Đóng</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Modal cap nhat nha cung cap -->


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
                    <th>Tên tài khoản</th>
                    <th>Tên hiển thị</th>
                    <th>Mật khẩu</th>
                    <th>Loại tài khoản</th>
                    <th width="90px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['taikhoan'] as $taikhoan) { ?>
                    <tr>
                        <td><?php echo $taikhoan->ma ?></td>
                        <td><?php echo $taikhoan->ten ?></td>
                        <td><?php echo $taikhoan->tenhienthi ?></td>
                        <td><?php echo $taikhoan->matkhau ?></td>
                        <td><?php echo $taikhoan->tenloai ?></td>
                        <td width="90px">
                            <a href="http://localhost/f3-monkey/user/capnhat/<?php echo $taikhoan->ma?>">
                                <i class=" fas fa-pencil-alt"></i>
                            </a>
                            <a href="http://localhost/f3-monkey/user/xoa/<?php echo $taikhoan->ma?>">
                                <i class=" fas fa-times"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
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