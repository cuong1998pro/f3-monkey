create database f3_monkey;
use f3_monkey;

create table khachhang(
	ma int primary key not null auto_increment,
	tendangnhap varchar(100),
    hoten varchar(100),
    diachi text,
    sodienthoai varchar(20),
    matkhau varchar(100)
);
insert into khachhang(tendangnhap,hoten,diachi,sodienthoai) 
values 
('hoan', 'Nguyễn Văn Hoan', 'Núi Đèo, Hải Phòng', '03232320'), 
('linh', 'Nguyễn Văn Linh', 'Đông Hải, Hải Phòng', '03232320'), 
('cuong', 'Phạm Quang Cường', 'Đổng Quốc Bình, Hải Phòng', '03232320');

create table nhacungcap(
	ma int primary key not null auto_increment,
    ten varchar(100),
    sodienthoai varchar(20),
    diachi text,
    email text,
    nguoilienhe text
);
INSERT INTO `f3_monkey`.`nhacungcap` (`ten`, `sodienthoai`, `diachi`, `email`, `nguoilienhe`) VALUES ('Điện máy xanh', '033288888', 'Núi Đèo, Thủy Nguyên, Hải Phòng', 'dienmayxanh@gmail.com', 'Ông Nguyễn Văn Linh');
INSERT INTO `f3_monkey`.`nhacungcap` (`ten`, `sodienthoai`, `diachi`, `email`, `nguoilienhe`) VALUES ('TGDD', '023232323', 'Móng Cái, Quảng Ninh', 'abc@gmail.com', 'Ông Nguyễn Văn Hoan');
INSERT INTO `f3_monkey`.`nhacungcap` (`ten`, `sodienthoai`, `diachi`, `email`, `nguoilienhe`) VALUES ('Xuất nhập khẩu linh kiện', '042343245', 'Cao Bằng, Việt Nam', 'def@gmail.com', 'Ông Phạm Qaung Cường');

create table banner(
	ma int primary key not null auto_increment,
    anh varchar(100),
    link varchar(100)
);

insert into banner(anh, link) 
values 
('banner1.jpg', 'lap-top-gia-soc'), 
('banner2.jpg', 'sale-chao-mua-he'), 
('banner3.jpg', 'dien-thoai-gia-sinh-vien');

create table slider(
	ma int primary key not null auto_increment,
    anh varchar(100),
    link varchar(100),
	noidung varchar(100)
);

insert into slider(anh, link, noidung) 
values 
('slide-1.png', 'lap-top-gia-soc', 'Phục vụ tận tình'), 
('slide-2.png', 'sale-chao-mua-he', 'Sản phẩm chất lượng'), 
('slide-3.png', 'sale-chao-mua-he', 'Đổi trả 30 ngày'), 
('slide-4.png', 'dien-thoai-gia-sinh-vien', 'Nguồn gốc rõ ràng');


create table danhmuc(
	ma int primary key not null auto_increment,
    ten varchar(100),
    ghichu varchar(100),
    link varchar(100)
);

insert into danhmuc(ten,ghichu,link) 
values 
('Điện thoại', 'Những loại điện thoại cao cấp với mức giá tốt', 'dien-thoai'), 
('Máy tính để bàn', 'Máy tính cây đồng bộ phục vụ cho nhu cầu học tập, giải trí', 'may-tinh-de-ban'), 
('Phụ kiện điện thoại', 'Phụ kiện điện thoại như tai nghe, sạc pin, ...', 'phu-kien-dien-thoai'), 
('Gaming gear', 'Các thiết bị chơi game như chuột, bàn phím, tay cầm, ...', 'gaming-gear'), 
('Laptop', 'Các loại laptop gaming, laptop cấu hình mạnh, laptop văn phòng', 'laptop');

create table thuonghieu(
	ma int primary key not null auto_increment,
    ten varchar(100),
    ghichu varchar(100),
    link varchar(100),
    madanhmuc int,
	foreign key (madanhmuc) references danhmuc(ma)
);

create table sanpham(
	ma int primary key not null auto_increment,
    ten varchar(100),
    anh varchar(100),
    madanhmuc int,
    mathuonghieu int,

    motasanpham text default '',
    -- 1 la` moi, 0 la cu
    tinhtrang int default 1,
    soluong int default 0,
	foreign key (mathuonghieu) references thuonghieu(ma),
	foreign key (madanhmuc) references danhmuc(ma)

);

--  các ảnh của sản phầm load lên giao diện
create table anhsanpham(
    ma int primary key not null auto_increment,
    anh varchar(100),
    masanpham int,
	foreign key (masanpham) references sanpham(ma)
);

create table thongsosanpham(
    ma int primary key not null auto_increment,
    ten varchar(100),
    giatri varchar(100),
    masanpham int,
	foreign key (masanpham) references sanpham(ma)
);

create table banggia(
	ma int primary key not null auto_increment,
	gia int,
    ngaycapnhat datetime default now(),
    masanpham int,
    phantramgiamgia int default 0,
	foreign key (masanpham) references sanpham(ma)
);

create table phieunhap (
    ma int primary key not null auto_increment,
    ngaynhap datetime default now(),
    manhacungcap int,
    mauser int, 
    foreign key (manhacungcap) references nhacungcap(ma)
    );
create table chitietphieunhap (
    maphieunhap  int,
    masanpham int,
    soluong int,
    dongia float,
    foreign key (maphieunhap) references phieunhap(ma),
    foreign key (masanpham) references sanpham(ma)
);

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
-- create table danhgia(
-- 	ma int primary key not null auto_increment,
--     masanpham int,
--     makhachhang int,
--     sao int,
--     binhluan int,
-- 	foreign key (masanpham) references sanpham(ma),
--     foreign key (makhachhang) references khachhang(ma)
-- );

