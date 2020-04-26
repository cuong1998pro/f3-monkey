<nav>
    <button class="collapse-aside-button"><i class="fa fa-bars fa-2x"></i></button>
    <ul class="header-menu">
        <li><a href="#">Tổng quan</a></li>
        <li><a href="#">Giới thiệu</a></li>
    </ul>
    <div class="user-aria">
        <?php if($_SESSION['tentaikhoan']):?>
        <div class="user-toggle">
            <img class="avatar" src="<?php echo URLROOT.$_SESSION['avatar']?>" alt="">
            <span class="username"><?php echo $_SESSION['tenhienthi']?></span>
        </div>
        <ul class="user-menu">
            <li><a href="">Thông tin tài khoản</a></li>
            <li><a href="">Đổi mật khẩu</a></li>
            <li><a href="">Đăng xuất</a></li>
        </ul>
        <?php endif;?>
    </div>
</nav>