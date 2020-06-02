<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Quản lý</a></li>
        <li>Nhập hàng</li>
    </ul>
    <button class="button-primary" id="themNCC">
        Thêm
    </button>

    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm sản phẩm</div>
            <form class="myform" action="<?php echo URLROOT ?>/quanlynhap/them-chi-tiet" method="post">
                <div class="form-group">
                    <input type="hidden" name="maphieunhap" value="<?php echo $data['maphieunhap']?>">
                    <label class="mylabel">Chọn sản phẩm <sup>*</sup></label>
                    <select name="masanpham">
                        <?php foreach ($data['sanpham'] as $sanpham) : ?>
                            <option value="<?php echo $sanpham->ma ?>">
                                <img src="<?php echo URLROOT . '/backend/images/sanpham/' . $sanpham->ten ?>" alt="">
                                <?php echo $sanpham->ten ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group ">
                    <label class="mylabel"> Số lượng</label>
                    <input name="soluong" placeholder="Nhập số lượng" type="number">
                </div>
                <div class="form-group ">
                    <label class="mylabel"> Đơn giá</label>
                    <input name="dongia" placeholder="Nhập đơn giá" type="number">
                </div>
                <div class="myform-button">
                    <button type="submit" id="themPhieuNhap" class="button-add">Thêm</button>
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
                    <th>Mã sản phẩm</th>
                    <th>Hình ảnh sản phẩm</th>
                    <th>Tên sản phẩm </th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Tổng tiền</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['phieunhap'] as $phieunhap) { ?>
                    <tr>
                        <td><?php echo $phieunhap->machitiet ?></td>
                        <td><img src="<?php echo URLROOT . '/backend/images/sanpham/' . $phieunhap->anh ?>"></td>
                        <td><?php echo $phieunhap->ten ?></td>
                        <td><?php echo $phieunhap->soluong ?></td>
                        <td><?php echo number_format($phieunhap->dongia) . 'đ' ?></td>
                        <td><?php echo number_format($phieunhap->dongia * $phieunhap->soluong) . 'đ' ?></td>

                        <td width="90px">
                            <a href="<?php echo URLROOT . '/quanlynhap/capnhatchitiet/' . $phieunhap->machitiet ?>">
                                <i class=" fas fa-pencil-alt"></i>
                            </a>
                            <a href="<?php echo URLROOT . '/quanlynhap/xoachitiet/' . $phieunhap->machitiet.'/'. $data['maphieunhap'] ?>">
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