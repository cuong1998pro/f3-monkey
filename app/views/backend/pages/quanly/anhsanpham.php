<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Danh Mục</a></li>
        <li><a href="<?php echo URLROOT . '/sanpham/index' ?>">Sản phẩm</a></li>
        <li>Hình ảnh sản phẩm</li>
    </ul>
    <button class="button-primary" id="themNCC">
        Thêm
    </button>

    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm</div>
            <form class="myform" action="<?php echo URLROOT ?>/anhsanpham/them" method="POST" enctype="multipart/form-data">

                <div class="form-group ">
                    <label class="mylabel">Chọn hình ảnh <sup>*</sup></label>
                    <input type="file" name="anh">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Mã sản phẩm <sup>*</sup></label>
                    <input type="text" name="masanpham" value="<?php echo $data['masanpham'] ?>" readonly>
                </div>
                <div class="myform-button">
                    <button type="submit" class="button-add">Thêm</button>
                    <button type="button" id="closeThemNCC" class="button-close">Đóng</button>
                </div>
            </form>
        </div>
    </div>



    <a class="button-primary" href="<?php echo URLROOT . '/nhacungcap/in' ?>"><i class="fas fa-print"></i> In</a>
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
                    <th>Hình ảnh</th>
                    <th>Đường dẫn</th>
                    <th width="90px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['danhsachanh'] as $anh) { ?>
                    <tr>
                        <td><?php echo $anh->ma ?></td>
                        <td><img src="<?php echo URLROOT . '/backend/images/sanpham/' . $anh->anh ?>" alt="Lỗi tải ảnh"></td>
                        <td><?php echo URLROOT . '/backend/images/sanpham/' . $anh->anh ?></td>
                        <td width="90px">
                            <a href="<?php echo URLROOT . '/anhsanpham/capnhat/' . $anh->ma ?>" <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="<?php echo URLROOT . '/anhsanpham/xoa/' . $anh->ma ?>" <i class="fas fa-times"></i>
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