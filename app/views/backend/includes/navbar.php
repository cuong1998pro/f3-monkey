<nav>
    <button class="collapse-aside-button"><i class="fa fa-bars fa-2x"></i></button>
    <ul class="header-menu">
        <li><a href="http://localhost/f3-monkey/admin">Tổng quan</a></li>
        <li><a href="#">Giới thiệu</a></li>
    </ul>
    <div class="user-aria">
        <?php if ($_SESSION['tentaikhoan']) : ?>
            <div class="user-toggle">
                <img class="avatar" src="<?php echo URLROOT . $_SESSION['avatar'] ?>" alt="">
                <span class="username"><?php echo $_SESSION['tenhienthi'] ?></span>
            </div>
            <ul class="user-menu">
                <li><a href="<?php echo URLROOT ?>/user/capnhat/<?php echo $_SESSION['mataikhoan'] ?>">Đổi mật khẩu</a></li>
                <li><a href="<?php echo URLROOT ?>/admin/logout">Đăng xuất</a></li>
            </ul>
        <?php endif; ?>
    </div>
</nav>