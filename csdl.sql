create database hungmobile;
use hungmobile;
create table cuahang(
    ten varchar(100),
    diachi text,
    sodienthoai varchar(20)
);
create table banner(
	ma int primary key not null auto_increment,
    anh varchar(100),
    link varchar(100)
);
create table danhmuc(
	ma int primary key not null auto_increment,
    ten varchar(100),
    anh varchar(100),
    link varchar(100)
);
-- create table danhmuccon(
-- 	ma int primary key not null auto_increment,
--     ten varchar(100),
--     anh varchar(100),
--     link varchar(100),
--     madanhmuccha int,
--     foreign key (ma) references danhmuc(ma)
-- );
create table tintuc(
	ma int primary key not null auto_increment,
    tieude varchar(100),
    anh varchar(100),
    tomtat varchar(100),
    noidung text
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
    noidung text,
    tinhtrang int,
    khuyenmai text,
    thongtinchitiet text,
    thongsokythuat text,
	foreign key (madanhmuc) references danhmuc(ma)
);
create table anhsanpham(
    ma int primary key not null auto_increment,
    anh varchar(100),
    masanpham int,
	foreign key (masanpham) references sanpham(ma)
);
create table luachon(
	ma int primary key not null auto_increment,
    masanpham int,
    mota varchar(100),
    gianiemyet int,
	foreign key (masanpham) references sanpham(ma)
);
create table giamgia(
	ma int primary key not null auto_increment,
    masanpham int,
	phantram int,
    ngaybatdau datetime,
    ngayketthuc datetime,
	foreign key (masanpham) references sanpham(ma)
);
create table magiamgia(
	ma int primary key not null auto_increment,
	phantram int,
    ngaybatdau datetime,
    ngayketthuc datetime
);
create table khachhang(
	ma int primary key not null auto_increment,
	tendangnhap varchar(100),
    matkhau varchar(100)
);
create table thanhtoan(
	ma int primary key not null auto_increment,
    hinhthucthanhtoan varchar(100),
	trangthai int,
    ngaythanhtoan datetime
);
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
create table loaitaikhoan(
	ma int primary key not null auto_increment,
	tenloai varchar(100)
);
insert into loaitaikhoan(tenloai) values ('admin');
create table user(
	ma int primary key not null auto_increment,
	ten varchar(100),
    tenhienthi varchar(100),
	email varchar(100),
	matkhau varchar(100),
    anh varchar(100) default '/backend/images/user.png',
    maloaitaikhoan int default 1,
    foreign key (maloaitaikhoan) references loaitaikhoan(ma)
);
