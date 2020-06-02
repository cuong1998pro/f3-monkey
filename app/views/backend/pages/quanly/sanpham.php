<?php checklogin() ?>
<?php require_once HEADER; ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Danh Mục</a></li>
        <li>Sản phẩm </li>
    </ul>
    <button class="button-primary" id="themNCC"> Thêm</button>

    <!-- Modal them nha cung cap -->
    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm sản phẩm</div>
            <form class="myform" action="<?php echo URLROOT ?>/Sanpham/them" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="mylabel">Tên sản phẩm <sup>*</sup></label>
                    <input type="text" name="ten" placeholder="Nhập sản phẩm ">
                </div>
                <div class="form-group">
                    <label class="mylabel">Ảnh sản phẩm <sup>*</sup></label>
                    <input type="file" name="anh" placeholder="Chọn ảnh sản phẩm ">
                </div>
                <div class="form-group">
                    <label class="mylabel">Danh mục <sup>*</sup></label>
                    <select name="madanhmuc" id="">
                        <?php foreach ($data['danhmuc'] as $danhmuc) : ?>
                            <option value="<?php echo $danhmuc->ma ?>">
                                <?php echo $danhmuc->ten ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="mylabel">Thương hiệu <sup>*</sup></label>
                    <select name="mathuonghieu" id="">
                        <?php foreach ($data['thuonghieu'] as $thuonghieu) : ?>
                            <option value="<?php echo $thuonghieu->ma ?>">
                                <?php echo $thuonghieu->ten ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="mylabel">Mô tả <sup>*</sup></label>
                    <textarea id="my-textarea" name="mota" rows="2" placeholder="Nhập địa chỉ"></textarea>
                    <script>
                        CKEDITOR.replace('mota');
                    </script>
                </div>
                <div class="form-group">
                    <label class="mylabel">Tình trạng <sup>*</sup></label>
                    <select name="tinhtrang" id="">
                        <option value="1">Mới</option>
                        <option value="2">Cũ 99%</option>
                        <option value="3">Cũ 80%</option>
                    </select>
                </div>

                <div class="myform-button">
                    <button type="submit" class="button-add">Thêm sản phẩm </button>
                    <button type="button" id="closeThemNCC" class="button-close">Đóng</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Modal cap nhat nha cung cap -->


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
                    <th style="width:107px">Danh mục</th>
                    <th style="width:107px">Thương hiệu</th>
                    <th style="width:107px">Tình trạng</th>
                    <th>Mô tả sản phẩm</th>
                    <th style="width:140px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['sanpham'] as $sanpham) : ?>
                    <tr>
                        <td><?php echo $sanpham->ma ?></td>
                        <td><img src="<?php echo URLROOT . '/backend/images/sanpham/' . $sanpham->anh ?>"></td>
                        <td><?php echo $sanpham->ten ?></td>
                        <td><?php echo $sanpham->danhmuc ?></td>
                        <td><?php echo $sanpham->thuonghieu ?></td>
                        <td><?php echo $sanpham->tinhtrang == 1 ? "Mới" : "Cũ" ?></td>
                        <td><?php echo htmlentities(substr($sanpham->motasanpham, 0, 120)) . '...' ?></td>
                        <td width="90px">
                            <a target="_blank" href="<?php echo URLROOT . '/sanpham/chi-tiet-san-pham/' . $sanpham->ma ?>" <i class="fas fa-eye"></i>
                            </a>
                            <a href="<?php echo URLROOT . '/sanpham/capnhat/' . $sanpham->ma ?>" <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="<?php echo URLROOT . '/sanpham/xoa/' . $sanpham->ma ?>" <i class="fas fa-times"></i>
                            </a>
                            <a href="<?php echo URLROOT . '/thongsosanpham/index/' . $sanpham->ma ?>" <i class="fas fa-info"></i>
                            </a>
                            <a href="<?php echo URLROOT . '/anhsanpham/index/' . $sanpham->ma ?>" <i class="fas fa-images"></i>
                            </a>
                            <a href="<?php echo URLROOT . '/khuyenmai/index/' . $sanpham->ma ?>" <i class="fas fa-gifts"></i>
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