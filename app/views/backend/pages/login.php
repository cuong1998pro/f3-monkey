<?php require_once(SESSION); ?>
<?php require_once(HEADER); ?>
<div class="row">
    <div class="col-md-4 mx-auto mt-5">
    <?php flash('dang_ky_thanh_cong')?>
        <div class="card card-body bg-light">
            <h2>Đăng nhập</h2>
            <p>Điền thông tin tài khoản và mật khẩu của bạn</p>
            <form action="<?php echo URLROOT; ?>/admin/login" method="post">
                <div class="form-group">
                    <label for="name">Tên tài khoản: <sup>*</sup></label>
                    <input type="text" name="ten" class="form-control form-control-lg" value="<?php echo $data['ten']?>">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu: <sup>*</sup></label>
                    <input type="password" name="matkhau" class="form-control form-control-lg">
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Đăng nhập" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/admin/register" class="float-right">Chưa có tài khoản? Đăng ký</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once(FOOTER); ?>