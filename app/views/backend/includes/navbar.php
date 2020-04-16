<header>
    <nav class="navbar navbar-expand-md navbar-dark mynav">
        <div class="container">

            <a class="navbar-brand"  id="dashboard" href="<?php echo URLROOT . '/admin' ?>"><img class="logo"  src="<?php echo URLROOT.'/backend/images/logo.png' ?>"  ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <?php if(!empty($_SESSION['tentaikhoan'])): ?>
                <ul class="navbar-nav mr-auto">
                    <li id="hethong" class="nav-item">
                        <a class="nav-link menu" href="#">Hệ thống<span class="sr-only">(current)</span></a>
                    </li>
                    <li  id="quanlynhap" class="nav-item menu">
                        <a class="nav-link" href="#">Nhập hàng<span class="sr-only">(current)</span></a>
                    </li>
                    <li  id="quanlyxuat" class="nav-item menu">
                        <a class="nav-link" href="#">Bán hàng<span class="sr-only">(current)</span></a>
                    </li>
                    <li  id="baocao" class="nav-item menu">
                        <a class="nav-link" href="#">Báo cáo<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <?php endif ?>
                <?php if (empty($_SESSION['tentaikhoan'])) : ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT . '/admin/login' ?>">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT . '/admin/register' ?>">Đăng ký</a>
                        </li>
                    </ul>
                <?php else : ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <div class="dropdown btn btn-default account-menu">
                                <div class="dropdown-toggle " data-toggle="dropdown" aria-expanded="true">
                                    <img class="avatar" src="<?php echo (URLROOT . $_SESSION['avatar']) ?>" alt="">
                                    <span><?php echo $_SESSION['tenhienthi'] ?></span>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Thay đổi thông tin</a>
                                    <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                                    <a class="dropdown-item" href="<?php echo URLROOT . '/admin/logout' ?>">Đăng xuất</a>
                                </div>
                            </div>
                        </li>
                    </ul>

                <?php endif; ?>

            </div>
        </div>
    </nav>
</header>
<div id="sub-mn">
  
</div>