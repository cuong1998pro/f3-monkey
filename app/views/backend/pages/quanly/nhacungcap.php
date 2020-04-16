<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <nav aria-label="breadcrumb" sty>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Nhập hàng / Nhà cung cấp</li>
        </ol>
    </nav>
    <button class="btn btn-info" id="themNCC"><i class="fas fa-plus"></i> Thêm</button>

    <!-- Modal them nha cung cap -->
    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm nhà cung cấp</div>
            <form class="myform" action="<?php echo URLROOT ?>/nhacungcap/them" method="post">
                <div class="form-group">
                    <label class="mylabel">Tên nhà cung cấp <sup>*</sup></label>
                    <input class="form-control myinput" type="text" name="ten" placeholder="Nhập tên nhà cung cấp">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Số điện thoại <sup>*</sup></label>
                    <input class="form-control myinput" type="text" name="sodienthoai" placeholder="Nhập số điện thoại">
                </div>
                <div class="form-group ">
                    <label class="mylabel" >Địa chỉ <sup>*</sup></label>
                    <textarea id="my-textarea" class="form-control" name="diachi" rows="2" placeholder="Nhập địa chỉ"></textarea>
                </div>
                <div class="form-group ">
                    <label class="mylabel" style="margin-top:0px">Email</label>
                    <input class="form-control myinput" type="text" name="email" placeholder="Nhập email">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Người liên hệ <sup>*</sup></label>
                    <input class="form-control myinput" type="text" name="nguoilienhe" placeholder="Nhập người liên hệ">
                </div>

                <div class="myform-button">
                    <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i>Thêm NCC</button>
                    <button type="button" id="closeThemNCC" class="btn btn-default"><i class="fas fa-times"style="background:transparent; color:black"></i>Đóng</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Modal cap nhat nha cung cap -->
    <div class="modal" id="modalCapnhatNCC">
        <div class="modal-content">
            <div class="form-header">Cập nhật nhà cung cấp</div>
            <form class="myform" action="<?php echo URLROOT ?>/nhacungcap/capnhat" method="post">
                <div class="form-group">
                    <label class="mylabel">Tên nhà cung cấp <sup>*</sup></label>
                    <input class="form-control myinput" type="text" name="ten" placeholder="Nhập tên nhà cung cấp" value="">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Số điện thoại <sup>*</sup></label>
                    <input class="form-control myinput" type="text" name="sodienthoai" placeholder="Nhập số điện thoại" value="">
                </div>
                <div class="form-group ">
                    <label class="mylabel" >Địa chỉ <sup>*</sup></label>
                    <textarea id="my-textarea" class="form-control" name="diachi" rows="2" placeholder="Nhập địa chỉ"></textarea>
                </div>
                <div class="form-group ">
                    <label class="mylabel" style="margin-top:0px">Email</label>
                    <input class="form-control myinput" type="text" name="email" placeholder="Nhập email" value="">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Người liên hệ <sup>*</sup></label>
                    <input class="form-control myinput" type="text" name="nguoilienhe" placeholder="Nhập người liên hệ" value="">
                </div>

                <div class="myform-button">
                    <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i>Cập nhật NCC</button>
                    <button id="close-form" class="btn btn-default"><i class="fas fa-times"style="background:transparent; color:black"></i>Đóng</button>
                </div>

            </form>
        </div>
    </div>

    <a class="btn btn-info" href="<?php echo URLROOT . '/nhacungcap/in' ?>"><i class="fas fa-print"></i> In</a>
    <div class="float-right">
        <form class="form-inline" action="">
            <div class="form-group">
                <input id="search-box" class="form-control" type="text" name="search" placeholder="Tìm kiếm">
                <button class="btn btn-info">Tìm kiếm</button>
            </div>
        </form>
    </div>
    <div class="mytable">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên NCC</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Người liên hệ</th>
                    <th width="90px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hưng Thịnh Company</td>
                    <td>0333212341</td>
                    <td>Số 69, Móng Cái, Quảng Ninh</td>
                    <td>cuong1998pro@gmail.com</td>
                    <td>Phạm Quang Cường</td>
                    <td width="90px"><a href="" class="edit-button"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="edit-button"><i class="fas fa-times"></i></a>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
    <div class="right">
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
    </div>
</div>
<?php require_once(FOOTER); ?>