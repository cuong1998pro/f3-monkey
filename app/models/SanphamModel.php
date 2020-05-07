<?php 

require_once('AnhsanphamModel.php');
require_once('BanggiaModel.php');
require_once('KhuyenmaiModel.php');
require_once('ThongsosanphamModel.php');


class SanphamModel{


    private $db;

    public function __construct()
    {
        $this->db = new Database;
        $this->AnhsanphamModel = new AnhsanphamModel();
        $this->BanggiaModel = new BanggiaModel();
        $this->KhuyenmaiModel = new KhuyenmaiModel();
        $this->ThongsosanphamModel = new ThongsosanphamModel();

    }
        //ten , anh, madanhmuc, mota, mausac, luachon, gianiemyet, noidung, tinhtrang, khuyenmai, thongtinchitiet, thongsokythuat 
    public function suaSanpham($data){
        $sql = "UPDATE sanpham SET ten=:ten, anh=:anh, madanhmuc=:madanhmuc, mota=:mota, mausac=:mausac, luachon=:luachon, gianiemyet=:gianiemyet, noidung=:noidung, tinhtrang=:tinhtrang, khuyenmai=:khuyenmai, thongtinchitiet=:thongtinchitiet, thongsokythuat=:thongsokythuat  WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':madanhmuc', $data['madanhmuc']);
        $this->db->bind(':mota', $data['mota']);
        $this->db->bind(':mausac', $data['mausac']);
        $this->db->bind(':luachon', $data['luachon']);
        $this->db->bind(':gianiemyet', $data['gianiemyet']);
        $this->db->bind(':noidung', $data['noidung']);
        $this->db->bind(':tinhtrang', $data['tinhtrang']);
        $this->db->bind(':khuyenmai', $data['khuyenmai']);
        $this->db->bind(':thongtinchitiet', $data['thongtinchitiet']);
        $this->db->bind(':thongsokythuat', $data['thongsokythuat']);
        return ($this->db->execute());
    }
    public function themSanpham($data){
        $sql = "INSERT INTO sanpham (ten , anh, madanhmuc, mota, mausac, luachon, gianiemyet, noidung, tinhtrang, khuyenmai, thongtinchitiet, thongsokythuat) VALUES (:ten , :anh, :madanhmuc, :mota, :mausac, :luachon, :gianiemyet, :noidung, :tinhtrang, :khuyenmai, :thongtinchitiet, :thongsokythuat)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':madanhmuc', $data['madanhmuc']);
        $this->db->bind(':mota', $data['mota']);
        $this->db->bind(':mausac', $data['mausac']);
        $this->db->bind(':luachon', $data['luachon']);
        $this->db->bind(':gianiemyet', $data['gianiemyet']);
        $this->db->bind(':noidung', $data['noidung']);
        $this->db->bind(':tinhtrang', $data['tinhtrang']);
        $this->db->bind(':khuyenmai', $data['khuyenmai']);
        $this->db->bind(':thongtinchitiet', $data['thongtinchitiet']);
        $this->db->bind(':thongsokythuat', $data['thongsokythuat']);
        return ($this->db->execute());
    }
    public function xoaSanpham($maTintuc)
    {
        $sql = "DELETE FROM sanpham WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $maTintuc);
        return ($this->db->execute());
    }
    
    public function layDanhSach(){
        $sql = 'select sanpham.ma, sanpham.ten, danhmuc.ten as danhmuc, thuonghieu.ten as \'thuonghieu\', tinhtrang 
        from sanpham inner join thuonghieu on thuonghieu.ma = sanpham.mathuonghieu
        inner join danhmuc on danhmuc.ma = sanpham.madanhmuc';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }


    public function laySanPhamTheoThuongHieu($mathuonghieu){
        $sql = 'select * from sanpham where mathuonghieu = '.$mathuonghieu;
        $this->db->query($sql);
        return $this->db->fetchAll();
    }
    public function laySanphamTheoDanhMuc($madanhmuc){
        $sql = 'select * from sanpham where madanhmuc = '.$madanhmuc .' limit 10';
        // $sql = 'select * from sanpham where madanhmuc = '.$madanhmuc . 'limit 10';
        $this->db->query($sql);
        $dssanpham = $this->db->fetchAll();
        foreach($dssanpham as $sanpham){
            $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->ma)->anh;
            $sanpham->giagoc =strval( number_format($this->BanggiaModel->layGia($sanpham->ma)->gia)).'đ' ;
        $sanpham->giaban = number_format($this->BanggiaModel->layGia($sanpham->ma)->gia - $this->BanggiaModel->layGia($sanpham->ma)->giamgia).'đ';

        }
        return $dssanpham;
    }

    public function layChiTietSanPham($masanpham){
        $sql = 'select * from f3_monkey.sanpham where ma = '.$masanpham ;
        // $sql = 'select * from sanpham where madanhmuc = '.$madanhmuc . 'limit 10';
        $this->db->query($sql);
        $sanpham = $this->db->first();
        $sanpham->anh = $this->AnhsanphamModel->layDanhSach($sanpham->ma);
        $sanpham->giagoc =strval( number_format($this->BanggiaModel->layGia($sanpham->ma)->gia)).'đ' ;
        $sanpham->giaban = number_format($this->BanggiaModel->layGia($sanpham->ma)->gia - $this->BanggiaModel->layGia($sanpham->ma)->giamgia).'đ';
        $sanpham->khuyenmai = $this->KhuyenmaiModel->layDanhSach($sanpham->ma);
        $sanpham->dsthongsokythuat = $this->ThongsosanphamModel->layDanhSach($sanpham->ma);
        return $sanpham;
    }
}