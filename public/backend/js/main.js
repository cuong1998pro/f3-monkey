var dropdownToggle = document.querySelector('.dropdown-toggle');
if (dropdownToggle != null) {
    dropdownToggle.addEventListener('click', () => {
        document.querySelector('.dropdown-menu').style.display =
            (document.querySelector('.dropdown-menu').style.display == "none") ? "block" : "none";
    })
}

var btnThemNCC = document.querySelector('#themNCC');
var btnCloseThemNCC = document.querySelector('#closeThemNCC');
if (btnThemNCC != null) {
    btnThemNCC.addEventListener('click', function() {
        document.querySelector("#modalThemNCC").style.display = "block";
    });
    btnCloseThemNCC.addEventListener('click', function() {
        document.querySelector("#modalThemNCC").style.display = "none";
    });
}

const usertoggle = document.querySelector('.user-toggle');
const usermenu = document.querySelector('.user-menu');

if (usertoggle != null) {
    usertoggle.addEventListener('click', () => {
        usermenu.style.display = usermenu.style.display == 'inline' ? 'none' : 'inline';
    })
}
const collapseAsideBtn = document.querySelector('.collapse-aside-button');
if (collapseAsideBtn != null) {
    collapseAsideBtn.addEventListener('click', () => {
        document.body.classList.toggle('collapse-aside');
        if (collapseAsideBtn.innerHTML != '<i class="fa fa-arrow-left fa-2x"></i>')
            collapseAsideBtn.innerHTML = '<i class="fa fa-arrow-left fa-2x"></i>';
        else
            collapseAsideBtn.innerHTML = '<i class="fa fa-bars fa-2x"></i>';
    })
}

const menuExpanders = document.querySelectorAll('.menu-expander');
if (menuExpanders != null) {
    menuExpanders.forEach(menu => {
        menu.addEventListener('click', () => {
            menu.style.display = 'block';
            var content = menu.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
                menu.innerHTML = menu.innerHTML.replace('up', 'down');

            } else {
                content.style.display = "block";
                menu.innerHTML = menu.innerHTML.replace('down', 'up');
            }
        })

    });
}

var sub_mn = document.querySelector('#sub-mn');
var hethong = document.querySelector('#hethong');
var danhmuc = document.querySelector('#danhmuc');
var quanly = document.querySelector('#quanly');
var baocao = document.querySelector('#baocao');

hethong.addEventListener('click', function() {
    this.classList.add('active');
    danhmuc.classList.remove('active');
    quanly.classList.remove('active');
    baocao.classList.remove('active');
    sub_mn.innerHTML = String.raw `
    <div id="sub-mn" class="sub-menu">
    <div class="container">
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-cog fa-3x"></i><br> Khai báo hệ thống</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-ad fa-3x"></i><br>Banner</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-sliders-h fa-3x"></i><br>Slider</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-users fa-3x"></i><br> Danh sách người dùng</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-user-check fa-3x"></i><br> Phân quyền</button>
    </div>
</div>
`;
});


danhmuc.addEventListener('click', function() {
    hethong.classList.remove('active');
    baocao.classList.remove('active');
    quanly.classList.remove('active');
    this.classList.add('active');
    sub_mn.innerHTML = String.raw `
    <div id="sub-mn" class="sub-menu">
    <div class="container">
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-list-ul fa-3x"></i><br>Loại sản phẩm</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-copyright fa-3x"></i><br> Thương hiệu sản phẩm</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-box fa-3x"></i><br> Sản phẩm</button>
        <button onclick="document.location='http://localhost/nhacungcap/index';" class="menu-button"><i class="fas fa-warehouse fa-3x"></i><br> Nhà cung cấp </button>
        <button onclick="document.location='http://localhost/nhacungcap/index';" class="menu-button"><i class="fas fa-user-tie fa-3x"></i><br> Khách hàng </button>
    </div>
</div>
`;
});
quanly.addEventListener('click', function() {
    hethong.classList.remove('active');
    danhmuc.classList.remove('active');
    baocao.classList.remove('active');
    quanly.classList.remove('active');
    this.classList.add('active');
    sub_mn.innerHTML = String.raw `
    <div id="sub-mn" class="sub-menu">
    <div class="container">
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-truck-moving fa-3x"></i><br> Nhập hàng </button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-dollar-sign fa-3x"></i><br> Định giá sản phẩm </button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-ad fa-3x"></i><br> Chương trình khuyến mãi</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-qrcode fa-3x"></i><br> Mã giảm giá </button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-shopping-cart fa-3x"></i><br> Đơn hàng </button>
    </div>
</div>
`;
});

baocao.addEventListener('click', function() {
    hethong.classList.remove('active');
    danhmuc.classList.remove('active');
    quanly.classList.remove('active');
    this.classList.add('active');
    sub_mn.innerHTML = String.raw `
    <div id="sub-mn" class="sub-menu">
    <div class="container">
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-cubes fa-3x"></i><br> Hàng tồn kho</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-dolly fa-3x"></i><br> Hàng nhập</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-dollar-sign fa-3x"></i><br>Hàng bán</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-file-invoice-dollar fa-3x"></i><br>Bảng giá</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-chart-pie fa-3x"></i><br>Danh số bán hàng </button>
    </div>
</div>
`;
});