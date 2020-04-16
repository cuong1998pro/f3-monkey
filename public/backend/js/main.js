var btnThemNCC = document.querySelector('#themNCC');
var btnCloseThemNCC = document.querySelector('#closeThemNCC');

btnThemNCC.addEventListener('click', function(){
    document.querySelector("#modalThemNCC").style.display="block";
});
btnCloseThemNCC.addEventListener('click', function(){
    document.querySelector("#modalThemNCC").style.display="none";
});


var sub_mn = document.querySelector('#sub-mn');
var hethong = document.querySelector('#hethong');
var quanlynhap = document.querySelector('#quanlynhap');
var quanlyxuat = document.querySelector('#quanlyxuat');
var baocao = document.querySelector('#baocao');

hethong.addEventListener('click', function(){
    this.classList.add('active');
    quanlynhap.classList.remove('active');
    quanlyxuat.classList.remove('active');
    baocao.classList.remove('active');
    sub_mn.innerHTML = String.raw`
    <div id="sub-mn" class="sub-menu">
    <div class="container">
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-cog fa-3x"></i><br> Khai báo hệ thống</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-users fa-3x"></i><br>Quản lý tài khoản</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-user-check fa-3x"></i><br>Phân quyền</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-info fa-3x"></i><br> Đổi mật khẩu </button>
    </div>
</div>
`;});


quanlynhap.addEventListener('click', function(){
    hethong.classList.remove('active');
    baocao.classList.remove('active');
    quanlyxuat.classList.remove('active');
    this.classList.add('active');
    sub_mn.innerHTML = String.raw`
    <div id="sub-mn" class="sub-menu">
    <div class="container">
        <button onclick="document.location='nhacungcap/danhsach';" class="menu-button"><i class="fas fa-warehouse fa-3x"></i><br> Nhà cung cấp </button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-list-ul fa-3x"></i><br>Loại sản phẩm</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-box fa-3x"></i><br> Sản phẩm</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-dolly-flatbed fa-3x"></i><br> Nhập hàng </button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-truck-moving fa-3x"></i><br> Trả lại NCC </button>
    </div>
</div>
`;});
quanlyxuat.addEventListener('click', function(){
    hethong.classList.remove('active');
    quanlynhap.classList.remove('active');
    baocao.classList.remove('active');
    quanlyxuat.classList.remove('active');
    this.classList.add('active');
    sub_mn.innerHTML = String.raw`
    <div id="sub-mn" class="sub-menu">
    <div class="container">
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-cog fa-3x"></i><br> Định giá sản phẩm</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-users fa-3x"></i><br> Chương trình giảm giá </button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-store-alt fa-3x"></i><br> Đơn hàng </button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-store-alt fa-3x"></i><br> Thông tin thanh toán </button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-store-alt fa-3x"></i><br> Thông tin vận chuyển </button>
    </div>
</div>
`;});

baocao.addEventListener('click', function(){
    hethong.classList.remove('active');
    quanlynhap.classList.remove('active');
    quanlyxuat.classList.remove('active');    
    this.classList.add('active');
    sub_mn.innerHTML = String.raw`
    <div id="sub-mn" class="sub-menu">
    <div class="container">
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-cog fa-3x"></i><br> Khai báo hệ thống</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-users fa-3x"></i><br>Quản lý tài khoản</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-user-check fa-3x"></i><br>Phân </button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-store-alt fa-3x"></i><br>Sao lưu dữ liệu</button>
        <button onclick="document.location='http://www.your-website.com';" class="menu-button"><i class="fas fa-store-alt fa-3x"></i><br>Phục hồi dữ liệu</button>
    </div>
</div>
`;});