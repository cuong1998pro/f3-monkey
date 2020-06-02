<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <!-- <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Danh Mục</a></li>
        <li><a href=Sản phẩm</a></li>
        <li>Khuyến mãi sản phẩm</li>
    </ul>
    <button class="button-primary" id="themNCC">
        Thêm
    </button> -->


    <div class="modal" id="modalThemNCC" style="display:block">
        <div class="modal-content">
            <div class="form-header">Thêm</div>
            <form class="myform" action="<?php echo URLROOT ?>/khuyenmai/sua/<?php echo $data['khuyenmai']->ma ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="masanpham" value="<?php echo $data['masanpham'] ?>">
                <div class="form-group">
                    <label class="mylabel">Nội dung khuyến mại <sup>*</sup></label>
                    <input type="text" name="khuyenmai" value="<?php echo $data['khuyenmai']->khuyenmai ?>" placeholder="Nhập nội dung khuyến mại">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Ngày bắt đầu <sup>*</sup></label>
                    <input type="text" name="ngaybatdau" value="<?php echo $data['khuyenmai']->ngaybatdau ?>" placeholder="Nhập ngày bắt đầu">
                </div>

                <div class="myform-button">
                    <button type="submit" class="button-add">Cập nhật</button>
                    <button type="button" id="closeThemNCC" class="button-close">Đóng</button>
                </div>
            </form>
        </div>
    </div>



    <!-- <a class="button-primary" href="<?php echo URLROOT . '/nhacungcap/in' ?>"><i class="fas fa-print"></i> In</a>
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
                    <th width="90px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
              
            </tbody>

        </table>

    </div> -->
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