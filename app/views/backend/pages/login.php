<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/backend/css/account.css">
    <title>Đăng nhập </title>
</head>

<body>
    <div class="background"></div>
    <div class="container">
        <?php flash('dang_ky_thanh_cong'); ?>
        <form class="form" action="<?php echo URLROOT?>/admin/login" method="post">
            <h2>Đăng Nhập</h2>
            <div class="form-control">
                <label for="username">Tên đăng nhập</label>
                <input name="tendangnhap" type="text" value="<?php echo $data['tendangnhap']?>"></input>
                <small><?php echo $data['loitendangnhap']?></small>
            </div>
            <div class="form-control">
                <label for="password">Mật khẩu</label>
                <input name="matkhau" type="password" value="<?php echo $data['matkhau']?>"></input>
                <small><?php echo $data['loimatkhau']?></small>
            </div>
            <button>Đăng nhập</button>
            <div class="user-function">
                <p>Bạn chưa có tài khoản</p>
                <a href="<?php echo URLROOT?>/admin/register">Đăng ký ngay</a>
            </div>
        </form>
    </div>
</body>

</html>