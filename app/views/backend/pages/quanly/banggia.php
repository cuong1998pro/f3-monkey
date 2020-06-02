<?php checklogin() ?>
<?php require_once HEADER; ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Danh Mục</a></li>
        <li>Bảng giá </li>
    </ul>


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
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th style="width:107px">Giá bán</th>
                    <th style="width:107px">Giá giảm</th>
                    <th style="width:107px">Ngày cập nhật</th>
                    <th style="width:140px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['banggia'] as $sanpham) : ?>
                    <tr>
                        <td><?php echo $sanpham->ma ?></td>
                        <td><img src="<?php echo URLROOT . '/backend/images/sanpham/' . $sanpham->anh ?>"></td>
                        <td><?php echo $sanpham->ten ?></td>
                        <td style="min-width:200px; font-weight:600; color:dardred"><?php echo $sanpham->gia ?></td>
                        <td style="min-width:200px; font-weight:600; color:dardred"><?php echo $sanpham->giamgia ?></td>
                        <td><?php echo $sanpham->ngaybatdau ?></td>
                        <td width="90px">
                            <a href="<?php echo URLROOT . '/banggia/capnhat/' . $sanpham->mabanggia ?>" <i class="fas fa-pencil-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
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
<?php require_once FOOTER; ?>