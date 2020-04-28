<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <!-- tên trang -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Quản lý</a></li> 
        <li>Loại sản phẩm</li>
    </ul>
    <!-- nút thên  sản phẩm -->
    <button class="button-primary" id="themNCC">
        <!-- icon dấu cộng -->
        <i class="fas fa-plus"></i>
         Thêm
    </button>

    <!-- Modal them nha cung cap. phần này là phần form thêm, mặc định ẩn đi, khi nào ấn nút nó hiện ra. sửa phần action-->
    <div class="modal" id="modalThemNCC">
        <div class="modal-content">
            <div class="form-header">Thêm nhà cung cấp</div>
            <!-- chinh enctype de upload duoc file -->
            <!-- form tra ve localhost/f3../loaisanpham/them -->
            <form class="myform" action="<?php echo URLROOT ?>/loaisanpham/them" method="POST" enctype="multipart/form-data">
         
                <div class="form-group">
                    <label class="mylabel">Tên nhà cung cấp <sup>*</sup></label>
                    <input type="text" name="ten" placeholder="Nhập tên nhà cung cấp">
                </div>
                <div class="form-group ">
                    <label class="mylabel">Hình ảnh <sup>*</sup></label>
                    <input type="File" name="anh">
                    <!-- input kieu file de up file -->
                </div>
                <div class="form-group ">
                    <label class="mylabel">Đường dẫn <sup>*</sup></label>
                    <input type="text" name="link" placeholder="Nhập người liên hệ">
                </div>

                <div class="myform-button">
                    <button type="submit" class="button-add"><i class="fas fa-plus" name="themNCC"></i>Thêm NCC</button>
                    <button type="button" id="closeThemNCC" class="button-close">Đóng</button>
                </div>
<!-- nut gui nhu binh thuong -->
            </form>
        </div>
    </div>

    <!-- Modal cap nhat nha cung cap -->


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
                    <th style ="width:auto">Hình ảnh</th>
                    <th>Đường dẫn</th>

                    <th width="90px">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <!-- foreach + mở ngặc -->
                <?php foreach ($data as $loaisanpham) { ?>
                    <tr>
                        <td><?php echo $loaisanpham->ma ?></td>
                        <td><?php echo $loaisanpham->ten ?></td>
                        <td>
                            <img src="<?php echo URLROOT . '/backend/images/' . $loaisanpham->anh ?>"> 
                            <!-- h the nay
                            ong sua may ong cho ok 1 form di r t lam them
                            formcos anhr lamf 1 cais fomr ko cos anh lamf 1 cai
                            r pull leen 
                            xoas het cai thua di
                            con lai de t lamf 
                            cuoi tuan laf xong bachend .ok  hieu roi dung k :)
                            so so
                            co j ko biet t goij ong
                            lam nv cho nhanh chu h nhin ong fix dau ddau lamws @@. t chua lam bao h nen loi . t chi biet lam chu chua lam
                            fix xong 1 cai di r cac cai con lai thuong tuw thoi? -->
                        </td>
                         <td><?php echo $loaisanpham->link ?></td>
                        <td width="90px">
                            <!-- chỉnh lại link -->
                            <a href="http://localhost/f3-monkey/loaisanpham/capnhat/<?php echo $loaisanpham->ma ?>" class="edit-button">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="http://localhost/f3-monkey/loaisanpham/xoa/<?php echo $loaisanpham->ma ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" class="delete-button">
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