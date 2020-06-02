<?php
require_once('AnhsanphamModel.php');
require_once('SanphamModel.php');
class DonhangModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
        $this->AnhsanphamModel = new AnhsanphamModel();
        $this->SanphamModel = new SanphamModel();
    }

    public function them($data)
    {
    
        $sql = "insert into thanhtoan(hinhthucthanhtoan, sotien) values(:hinhthucthanhtoan, :sotien)";
        $this->db->query($sql);
        $this->db->bind(':hinhthucthanhtoan', $data['hinhthucthanhtoan']);
        $this->db->bind(':sotien', $data['sotien']);
        $this->db->execute();
        $mathanhtoan = $this->db->lastInsertId();
        $sql = "insert into vanchuyen(tennguoinhan, diachi, sodienthoai, ghichu) values(:hoten, :diachi, :sodienthoai, :ghichu)";
        $this->db->query($sql);
        $this->db->bind(':hoten', $data['hoten']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        $this->db->bind(':ghichu', $data['ghichu']);
        $this->db->execute();
        $mavanchuyen = $this->db->lastInsertId();
        $sql = "insert into donhang(tenkhachhang, mavanchuyen, mathanhtoan, thanhtien) values(:tenkhachhang, :mavanchuyen, :mathanhtoan, :thanhtien)";
        $this->db->query($sql);
        $this->db->bind(':tenkhachhang', $data['hoten']);
        $this->db->bind(':mavanchuyen', $mavanchuyen);
        $this->db->bind(':mathanhtoan', $mathanhtoan);
        $this->db->bind(':thanhtien', $data['sotien']);
        $this->db->execute();
        $madonhang = $this->db->lastInsertId();
        $giohang = $_SESSION['giohang'];
        foreach($giohang as $sanphamtronggio){
            $sql = "insert into chitietdonhang(madonhang, masanpham, soluong, dongia) values(:madonhang, :masanpham, :soluong, :dongia)";
            $this->db->query($sql);
            $this->db->bind(':madonhang', $madonhang);
            $this->db->bind(':masanpham', $sanphamtronggio['masanpham']);
            $this->db->bind(':soluong', $sanphamtronggio['soluong']);
            $this->db->bind(':dongia', $sanphamtronggio['dongia']);
            $this->db->execute();
        }
    }


    public function xacnhan($madonhang){
        $sql = 'update donhang set trangthai = 1 where donhang.ma = '.$madonhang;
        $this->db->query($sql);
        return $this->db->execute();
    }
    public function giaohang($madonhang)
    {
        $sql = 'update donhang set trangthai = 2 where donhang.ma = ' . $madonhang;
        $this->db->query($sql);
        return $this->db->execute();
    }
    public function thanhtoan($madonhang)
    {
        $sql = 'update donhang set trangthai = 3 where donhang.ma = ' . $madonhang;
        $this->db->query($sql);
        return $this->db->execute();
    }
    public function hoanthanh($madonhang)
    {
        $sql = 'update donhang set trangthai = 4 where donhang.ma = ' . $madonhang;
        $this->db->query($sql);
        return $this->db->execute();
    }

    public function xoa($madonhang){
        $sql = 'delete from chitietdonhang where madonhang = ' . $madonhang;
        $this->db->query($sql);
        $this->db->execute();
        $sql = 'delete from donhang where ma = ' . $madonhang;
        $this->db->query($sql);
        return $this->db->execute();

    }

    public function layDanhSach()
    {
        $sql = 'select * from donhang order by ngaytao desc';
        $this->db->query($sql);
        $danhsachdonhang = $this->db->fetchAll();
        foreach ($danhsachdonhang as $donhang) {
            $sql = 'select * from chitietdonhang where madonhang = '. $donhang->ma;
            $this->db->query($sql);
            $donhang->danhsachchitiet = $this->db->fetchAll();
            $donhang->tongtien = 0;
            foreach ($donhang->danhsachchitiet as $sanpham) {
                $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->masanpham)->anh;
                $sanpham->ten = $this->SanphamModel->layChiTietSanPham($sanpham->masanpham)->ten;
                $donhang->tongtien += $sanpham->dongia * $sanpham->soluong;
            }
            $sql = 'select * from thanhtoan where ma = ' . $donhang->mathanhtoan;
            $this->db->query($sql);
            $temp = $this->db->first();
            $donhang->dathanhtoan = $temp->trangthai;
            $donhang->tongcong = $temp->sotien;
            $sql = 'select * from vanchuyen where ma = ' . $donhang->mavanchuyen;
            $this->db->query($sql);
            $temp = $this->db->first();
            $donhang->sodienthoai = $temp->sodienthoai;
            $donhang->diachi = $temp->diachi;
            $donhang->ghichu = $temp->ghichu;
            
        }
        return $danhsachdonhang;
    }

   
}
