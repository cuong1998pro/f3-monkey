<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Hệ thống</a></li>
        <li>Cập nhật Slider</li>
    </ul>

    <div class="mytable">
        <table>
            <thead>
                <tr>
                    <th>Mã </th>
                    <th>Hình ảnh</th>
                    <th>Đường dẫn</th>
                    <th>Nội dung</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $slider) { ?>
                    <tr>
                        <td><?php echo $slider->ma ?></td>
                        <td><img src="<?php echo URLROOT . '/backend/images/' . $slider->anh ?>"></td>
                        <td><?php echo $slider->link ?></td>
                        <td><?php echo $slider->noidung ?></td>
                        <td width="90px">
                            <a href="http://localhost/f3-monkey/slider/capnhat/<?php echo $slider->ma ?>">
                                <i class=" fas fa-pencil-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

    </div>

</div>
<?php require_once(FOOTER); ?>