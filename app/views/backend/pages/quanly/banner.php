<?php checklogin() ?>
<?php require_once(HEADER); ?>

<div id="main-content" class="container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Hệ thống</a></li>
        <li>Cập nhật Banner</li>
    </ul>

    <div class="mytable">
        <table>
            <thead>
                <tr>
                    <th>Mã </th>
                    <th>Hình ảnh</th>
                    <th>Đường dẫn</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $banner) { ?>
                    <tr>
                        <td><?php echo $banner->ma ?></td>
                        <td><img src="<?php echo URLROOT . '/backend/images/' . $banner->anh ?>"></td>
                        <td><?php echo $banner->link ?></td>
                        <td width="90px">
                            <a href="http://localhost/f3-monkey/banner/capnhat/<?php echo $banner->ma ?>">
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