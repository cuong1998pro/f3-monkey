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
            <div class="form-header">Thêm phiếu nhập</div>
            <form class="myform" action="<?php echo URLROOT?>/quanlynhap/them" method="post">
                <div class="form-group">
                    <label class="mylabel">Chọn nhà cung cấp <sup>*</sup></label>
                    <select name="manhacungcap" id="manhacungcap">
                        <?php foreach ($data['nhacungcap'] as $nhacungcap) : ?>
                            <option value="<?php echo $nhacungcap->ma ?>"><?php echo $nhacungcap->ten ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group ">
                    <label class="mylabel"> Lý do nhập</label>
                    <input name="lydonhap" id="lydonhap" placeholder="Nhập lý do nhập">
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
                    <th>Mã số</th>
                    <th>Nhà cung cấp</th>
                    <th style="width: 105px;">Ngày nhập</th>
                    <th width="170px">Lý do nhập</th>
                    <th>Các sản phẩm</th>
                    <th>Tổng tiền</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['phieunhap'] as $phieunhap) { ?>
                    <tr>
                        <td><?php echo $phieunhap->ma ?></td>
                        <td><?php echo $phieunhap->nhacungcap ?></td>
                        <td><?php echo $phieunhap->ngaynhap ?></td>
                        <td><?php echo $phieunhap->lydonhap ?></td>
                        <td>
                            <?php foreach ($phieunhap->danhsachchitiet as $sanpham) : ?>
                                <p class="ten-san-pham"> <img src="<?php echo URLROOT . '/backend/images/sanpham/' . $sanpham->anh ?>" style="width:40px; margin-top:-20px; vertical-align: bottom;" alt=""> <?php echo substr($sanpham->ten, 0, 32) . '...' ?> <b><?php echo ' (' . number_format($sanpham->dongia) . 'đ) x ' ?><?php echo number_format($sanpham->soluong) ?> </b></p>
                            <?php endforeach; ?>
                        </td>
                        <td><?php echo number_format($phieunhap->tongtien) . 'đ' ?></td>
                        <td width="90px">
                            <a href="<?php echo URLROOT . '/quanlynhap/capnhat/' . $phieunhap->ma ?>">
                                <i class=" fas fa-pencil-alt"></i>
                            </a>
                            <a href="<?php echo URLROOT . '/quanlynhap/xoa/' . $phieunhap->ma ?>">
                                <i class=" fas fa-times"></i>
                            </a>
                            <a href="<?php echo URLROOT . '/quanlynhap/xem-chi-tiet/' . $phieunhap->ma ?>">
                                <i class=" fas fa-list-alt"></i>
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