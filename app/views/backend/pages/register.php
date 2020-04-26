<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/backend/css/account.css">
    <title>Đăng ký </title>
</head>

<body>
    <div class="background"></div>
    <div class="container">
        <form class="form" action="<?php echo URLROOT ?>/admin/register" method="post">
            <h2>Tạo tài khoản</h2>
            <div class="form-control">
                <label for="username">Tên đăng nhập</label>
                <input name="ten" type="text" value="<?php echo $data['ten'] ?>"></input>
                <small><?php echo $data['loiten'] ?></small>
            </div>
            <div class="form-control">
                <label for="username">Tên hiển thị</label>
                <input name="tenhienthi" type="text" value="<?php echo $data['tenhienthi'] ?>"></input>
                <small><?php echo $data['loitenhienthi'] ?></small>
            </div>
            <div class="form-control">
                <label for="password">Mật khẩu</label>
                <input name="matkhau" type="password" value="<?php echo $data['matkhau'] ?>"></input>
                <small><?php echo $data['loimatkhau'] ?></small>
            </div>
            <div class="form-control">
                <label for="password">Mật khẩu</label>
                <input name="nhaplai" type="password" value="<?php echo $data['nhaplaimatkhau'] ?>"></input>
                <small><?php echo $data['loinhaplai'] ?></small>
            </div>

            <button>Đăng ký</button>
            <div class="user-function">
                <p>Bạn đã có tài khoản</p>
                <a href="<?php echo URLROOT ?>/admin/login">Đăng nhập ngay</a>
            </div>
        </form>
    </div>
</body>

</html>