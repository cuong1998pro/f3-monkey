<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Danh Mục</a></li>
        <li>Thương hiệu</li>
    </ul>
    <button class="button-primary" id="themNCC">
        Thêm
    </button>

    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm thương hiệu</div>
            <form class="myform" action="<?php echo URLROOT ?>/thuonghieu/them" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="mylabel">Tên thương hiệu <sup>*</sup></label>
                    <input type="text" name="ten" placeholder="Nhập tên">
                </div>
                <div class="form-group ">
                    <label class="mylabel"> Ghi chú<sup>*</sup></label>
                    <input type="text" name="ghichu" placeholder="Nhập ghi chú">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Đường dẫn <sup>*</sup></label>
                    <input type="text" name="link" placeholder="Nhập đường dẫn">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Chọn danh mục <sup>*</sup></label>
                    <select name="madanhmuc" id="">
                        <?php foreach ($data['danhmuc'] as $danhmuc) : ?>
                            <option value="<?php echo $danhmuc->ma ?>"><?php echo $danhmuc->ten ?></option>
                        <?php endforeach; ?>
                    </select>
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
                    <th>Tên loại</th>
                    <th style="width:auto">Ghi chú</th>
                    <th>Đường dẫn</th>
                    <th>Danh mục</th>
                    <th width="90px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['thuonghieu'] as $thuonghieu) { ?>
                    <tr>
                        <td><?php echo $thuonghieu->ma ?></td>
                        <td><?php echo $thuonghieu->ten ?></td>
                        <td><?php echo $thuonghieu->ghichu ?></td>
                        <td><?php echo $thuonghieu->link ?></td>
                        <td><?php echo $thuonghieu->danhmuc ?></td>
                        <td width="90px">
                            <a href="<?php echo URLROOT . '/thuonghieu/capnhat/' . $thuonghieu->ma ?>">
                                <i class=" fas fa-pencil-alt"></i>
                            </a>
                            <a href="<?php echo URLROOT . '/thuonghieu/xoa/' . $thuonghieu->ma ?>">
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