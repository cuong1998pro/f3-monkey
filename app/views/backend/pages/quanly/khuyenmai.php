<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Danh Mục</a></li> 
        <li><a href="<?php echo URLROOT.'/sanpham/index'?>">Sản phẩm</a></li> 
        <li>Khuyến mãi sản phẩm</li>
    </ul>
    <button class="button-primary" id="themNCC">
         Thêm
    </button>
    <?php
    $url = rtrim($_GET['url'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);
    $masanpham = $duongdan[sizeof($duongdan)-1];?>

    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm</div>
            <form class="myform" action="<?php echo URLROOT ?>/khuyenmai/them" method="POST" enctype="multipart/form-data">
         
                <div class="form-group">
                    <label class="mylabel">Nội dung khuyến mại <sup>*</sup></label>
                    <input type="text" name="khuyenmai" placeholder="Nhập nội dung khuyến mại">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Ngày bắt đầu <sup>*</sup></label>
                    <input type="text" name="ngaybatdau" placeholder="Nhập ngày bắt đầu">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Ngày kêt thúc <sup>*</sup></label>
                    <input type="text" name="ngayketthuc" placeholder="Nhập ngày kết thúc">
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
                    <th>Khuyến mại</th>
                    <th>Ngày bắt đầu</th> 
                    <th>Ngày kết thúc</th> 
                    <th width="90px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $khuyenmai) { ?>
                    <tr>
                        <td><?php echo $khuyenmai->ma ?></td>
                        <td><?php echo $khuyenmai->khuyenmai ?></td>
                         <td><?php echo $khuyenmai->ngaybatdau ?></td>
                         <td><?php echo $khuyenmai->ngayketthuc ?></td>
                        <td width="90px">
                            <a href="<?php echo URLROOT.'/khuyenmai/capnhat/'. $khuyenmai->ma ?>"
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="<?php echo URLROOT.'/khuyenmai/xoa/'. $khuyenmai->ma ?>"
                                <i class="fas fa-times"></i>
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