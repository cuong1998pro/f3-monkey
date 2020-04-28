create database f3_monkey;
use f3_monkey;

-- create table cuahang(
--     ten varchar(100),
--     diachi text,
--     sodienthoai varchar(20),
--     email text
-- )

create table khachhang(
	ma int primary key not null auto_increment,
	tendangnhap varchar(100),
    hoten varchar(100),
    diachi text,
    sodienthoai varchar(20),
    matkhau varchar(100)
);

create table nhacungcap(
	ma int primary key not null auto_increment,
    ten varchar(100),
    sodienthoai varchar(20),
    diachi text,
    email text,
    nguoilienhe text
);

-- Ba cái ảnh trên giao diện
create table banner(
	ma int primary key not null auto_increment,
    anh varchar(100),
    link varchar(100)
);

-- Tạo danh mục trên website
create table danhmuc(
	ma int primary key not null auto_increment,
    ten varchar(100),
    anh varchar(100),
    link varchar(100)

);

create table sanpham(
	ma int primary key not null auto_increment,
    ten varchar(100),
    anh varchar(100),
    madanhmuc int,
    mota varchar(100),
    mausac varchar(100),
    luachon varchar(100),
    gianiemyet int,
    -- giảm giá float.
    noidung text,
    tinhtrang int,
    khuyenmai text,
    thongtinchitiet text,
    thongsokythuat text,
	foreign key (madanhmuc) references danhmuc(ma)
);

--  các ảnh của sản phầm load lên giao diện
create table anhsanpham(
    ma int primary key not null auto_increment,
    anh varchar(100),
    masanpham int,
	foreign key (masanpham) references sanpham(ma)
);

-- create table thongsosanpham(
--     ma int primary key not null auto_increment,
--     ten varchar(100),
--     giatri varchar(100),
--     masanpham int,
-- 	foreign key (masanpham) references sanpham(ma)
-- );

-- create table luachon(
-- 	ma int primary key not null auto_increment,
--     masanpham int,
--     chitiet varchar(100),
--     gianiemyet int,
-- 	foreign key (masanpham) references sanpham(ma)
-- );

-- create table mausac(
-- 	ma int primary key not null auto_increment,
--     masanpham int,
--     mau varchar(100),
--     gianiemyet int,
-- 	foreign key (masanpham) references sanpham(ma)
-- );

--  sửa tên thành bàng giá 
-- create table giamgia(
-- 	ma int primary key not null auto_increment,
-- 	phantram int,
--     ngaybatdau datetime,
--     ngayketthuc datetime
-- );

-- create table chitietgiamgia(
--     magiamgia int,
--     masanpham int,
--     foreign key (masanpham) references sanpham(ma),
--     foreign key (magiamgia) references giamgia(ma)
-- );


-- create table magiamgia(
-- 	ma int primary key not null auto_increment,
-- 	phantram int,
--     ngaybatdau datetime,
--     ngayketthuc datetime
-- );


-- Xem người nhận đã thanh toán hay chưa
create table thanhtoan(
	ma int primary key not null auto_increment,
    hinhthucthanhtoan varchar(100),
	trangthai int,
    ngaythanhtoan datetime
);

-- thông tin người nhận 
create table vanchuyen(
	ma int primary key not null auto_increment,
    tennguoinhan varchar(100),
	diachi int,
    sodienthoai datetime,
    ghichu varchar(100)
);

create table donhang(
	ma int primary key not null auto_increment,
    makhachhang int,
	mavanchuyen int,
	mathanhtoan int,
    trangthai int,
    thanhtien int,
    ngaytao datetime,
	foreign key (makhachhang) references khachhang(ma),
	foreign key (mathanhtoan) references thanhtoan(ma),
	foreign key (mavanchuyen) references vanchuyen(ma)
);


create table chitietdonhang(
	ma int primary key not null auto_increment,
    madonhang int,
	masanpham int,
	soluong int,
	foreign key (masanpham) references sanpham(ma),	
    foreign key (madonhang) references donhang(ma)
);

-- chi tài loại tài khoản
create table loaitaikhoan(
	ma int primary key not null auto_increment,
	tenloai varchar(100)
);

insert into loaitaikhoan(tenloai) values ('admin');

-- Thông tin tài khảon nhân viên
create table user(
	ma int primary key not null auto_increment,
	ten varchar(100),
    tenhienthi varchar(100),
	matkhau varchar(100),
    anh varchar(100) default '/backend/images/user.png',
    maloaitaikhoan int default 1,
    foreign key (maloaitaikhoan) references loaitaikhoan(ma)
);

-- Hiển thị cmt
create table danhgia(
	ma int primary key not null auto_increment,
    masanpham int,
    makhachhang int,
    sao int,
    binhluan int,
	foreign key (masanpham) references sanpham(ma),
    foreign key (makhachhang) references khachhang(ma)
);

