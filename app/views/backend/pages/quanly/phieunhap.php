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
            <div class="myform">
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
            </div>
        </div>
    </div>

    <div class="modal" id="modalThemSanPham">
        <div class="modal-content">
            <div class="form-header">Thêm phiếu nhập</div>
            <div class="myform">

                <div class="form-group">
                    <input type="text" name="maphieunhap" id="maphieunhap">
                    <label class="mylabel">Chọn sản phẩm <sup>*</sup></label>
                    <select name="masanpham" id="masanpham">
                        <?php foreach ($data['sanpham'] as $sanpham) : ?>
                            <option value="<?php echo $sanpham->ma ?>"><?php echo $sanpham->ten ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group ">
                    <label class="mylabel"> Số lượng</label>
                    <input name="soluong" id="soluong" placeholder="Nhập số lượng">
                </div>
                <div class="form-group ">
                    <label class="mylabel"> Đơn giá nhập</label>
                    <input name="dongia" id="dongia" placeholder="Nhập đơn giá">
                </div>
                <div class="myform-button">
                    <button type="submit" class="button-add" id="themSanPham">Thêm</button>
                    <button type="button" id="closeThemSanPham" class="button-close">Đóng</button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Mã số</th>
                            <th>Sản phẩm</th>
                            <th style="width: 105px;">Số lượng</th>
                            <th width="170px">Đơn giá</th>
                            <th style="width:60px">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php foreach ($data['phieunhap'] as $phieunhap) { ?>
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
                                    <a href="<?php echo URLROOT . '/quanlynhap/cap-nhat-chi-tiet/' . $phieunhap->ma ?>">
                                        <i class=" fas fa-list-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?> -->
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#themPhieuNhap').click(function() {
                var manhacungcap = $('#manhacungcap').val(),
                    lydonhap = $('#lydonhap').val();
                $.ajax({
                    url: 'http://localhost/f3-monkey/quanlynhap/them',
                    data: {
                        manhacungcap: manhacungcap,
                        lydonhap: lydonhap,
                    },
                    type: 'post',
                    success: function(data) {
                        if (!data.error) {
                            $('#maphieunhap').val(data);
                            $('#modalThemSanPham').show();
                        }
                    }
                })
            });
            $('#themSanPham').click(function() {
                var masanpham = $('#masanpham').val(),
                    soluong = $('#soluong').val(),
                    dongia = $('#dongia').val();
                $.ajax({
                    url: 'http://localhost/f3-monkey/quanlynhap/them-chi-tiet-don-hang',
                    data: {
                        masanpham: masanpham,
                        soluong: soluong,
                        dongia: dongia,
                    },
                    type: 'post',
                    success: function(data) {
                        if (!data.error) {

                        }
                    }
                })
            });
        });
    </script>

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
                    <th style="width:60px">Chức năng</th>
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
                            <a href="<?php echo URLROOT . '/quanlynhap/cap-nhat-chi-tiet/' . $phieunhap->ma ?>">
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