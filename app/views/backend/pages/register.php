<?php require_once(SESSION); ?>
<?php require_once(HEADER); ?>
<div class="row">
    <div class="col-md-5 mx-auto  mt-5">
    <?php flash('loi_dang_ky')?>
        <div class="card card-body bg-light">
            <h2>Tạo tài khoản</h2>
            <p>Điền vào form dưới đây để đăng ký</p>
            <form action="<?php echo URLROOT; ?>/admin/register" method="post">
                <div class="form-group">
                    <label for="name">Tên tài khoản: <sup>*</sup></label>
                    <input type="text" name="ten" class="form-control form-control-lg <?php echo (!empty($data['loiten'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['ten']; ?>">
                    <span class="invalid-feedback"><?php echo $data['loiten']; ?></span>
                </div>
                <div class="form-group">
                    <label for="name">Tên hiển thị: <sup>*</sup></label>
                    <input type="text" name="tenhienthi" class="form-control form-control-lg " value="<?php echo $data['tenhienthi']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['loiemail'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback"><?php echo $data['loiemail']; ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu: <sup>*</sup></label>
                    <input type="password" name="matkhau" class="form-control form-control-lg <?php echo (!empty($data['loimatkhau'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['matkhau']; ?>">
                    <span class="invalid-feedback"><?php echo $data['loimatkhau']; ?></span>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Nhập lại mật khẩu: <sup>*</sup></label>
                    <input type="password" name="nhaplai" class="form-control form-control-lg <?php echo (!empty($data['loinhaplai'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nhaplaimatkhau']; ?>">
                    <span class="invalid-feedback"><?php echo $data['loinhaplai']; ?></span>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Đăng ký" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Đã có tài khoản? Đăng nhập</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once(FOOTER); ?>