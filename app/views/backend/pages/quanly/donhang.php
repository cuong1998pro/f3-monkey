<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Quản lý</a></li>
        <li>Đơn hàng</li>
    </ul>




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
                    <th>Khách hàng</th>
                    <th>Các sản phẩm</th>
                    <th>Tổng cộng</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['dsdonhang'] as $donhang) { ?>
                    <tr>
                        <?php $tongcong = 0; ?>
                        <td><?php echo $donhang->ma ?></td>
                        <td><?php echo $donhang->tenkhachhang ?>
                            <br>
                            <small><b><?php echo $donhang->sodienthoai ?></b></small>
                            <br>
                            <small><?php echo $donhang->diachi ?></small>
                            <br>
                            <small><?php echo $donhang->ghichu ?></small>
                            <br>

                        </td>
                        <td>
                            <?php foreach ($donhang->danhsachchitiet as $sanpham) : ?>
                                <p class="ten-san-pham"> <img src="<?php echo URLROOT . '/backend/images/sanpham/' . $sanpham->anh ?>" style="width:40px; margin-top:-20px; vertical-align: bottom;" alt="">
                                <?php echo substr($sanpham->ten, 0, 40).'...'?>
                                    <b>
                                        <?php echo ' (' . number_format($sanpham->dongia) . 'đ) x ' ?><?php echo number_format($sanpham->soluong);
                                                                                                                $tongcong += $sanpham->dongia * $sanpham->soluong; ?>
                                    </b>
                                </p>
                            <?php endforeach; ?>
                        </td>
                        <td><?php echo number_format($donhang->tongcong) . 'đ' ?></td>
                        <td><?php
                                switch ($donhang->trangthai) {
                                    case 0:
                                        echo 'Chưa xử lý';
                                        echo '<span><a style="color:blue; margin:0 10px" href="http://localhost/f3-monkey/donhang/xac-nhan/'.$donhang->ma.'">Xử lý</a></span>';
                                        break;
                                    case 1:
                                        echo 'Chờ giao hàng';
                                        echo '<span><a style="color:blue; margin:0 10px" href="http://localhost/f3-monkey/donhang/giao-hang/' . $donhang->ma . '">Giao hàng</a></span>';
                                        break;
                                    case 2:
                                        echo 'Chờ thanh toán';
                                        echo '<span><a style="color:blue; margin:0 10px" href="http://localhost/f3-monkey/donhang/thanh-toan/' . $donhang->ma . '">Thanh toán</a></span>';
                                        break;
                                    case 3:
                                        echo 'Đã thanh toán';
                                        echo '<span><a style="color:blue; margin:0 10px" href="http://localhost/f3-monkey/donhang/hoan-thanh/' . $donhang->ma . '">Xác nhận hoàn thành</a></span>';
                                        break;
                                    case 4:
                                        echo 'Đã hoàn tất';
                                        break;
                                }
                                ?></td>

                        <td width="90px">
                            <a href="<?php echo URLROOT . '/donhang/xoa/' . $donhang->ma ?>">
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