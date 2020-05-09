<?php 
    require_once('ThuonghieuModel.php');
    require_once('SanphamModel.php');

class LoaisanphamModel{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
        $this->ThuonghieuModel = new ThuonghieuModel();
        $this->SanphamModel = new SanphamModel();

    }

    public function suaDanhmuc($data){
        $sql = "UPDATE danhmuc SET ten = :ten, ghichu = :ghichu, link = :link WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':ghichu', $data['ghichu']);
        $this->db->bind(':link', $data['link']);
        $this->db->bind(':ma', $data['ma']);
        return ($this->db->execute());
    }
    public function themDanhmuc($data){
        $sql = "INSERT INTO danhmuc (ten, ghichu, link) VALUES (:ten, :ghichu, :link)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':ghichu', $data['ghichu']);
        $this->db->bind(':link', $data['link']);
        return ($this->db->execute());
    }
    public function xoaDanhmuc($maDanhmuc)
    {
        $sql = "DELETE FROM danhmuc WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $maDanhmuc);
        return ($this->db->execute());
    }
    
    public function layDanhSach(){
        $sql = 'select * from danhmuc';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }

    public function layDanhmuc($ma){
        $sql = 'select * from danhmuc where ma = '. $ma;
        $this->db->query($sql);
        return $this->db->first();
    }
    public function layDanhSachChiTiet(){
        $sql = 'select * from danhmuc';
        $this->db->query($sql);
        $danhSachDanhMuc =  $this->db->fetchAll();
        foreach($danhSachDanhMuc as $danhmuc){
            $danhmuc->dsthuonghieu = $this->ThuonghieuModel->layThuongHieuTheoDanhMuc($danhmuc->ma);
            $danhmuc->dssanpham = $this->SanphamModel->laySanphamTheoDanhMuc($danhmuc->ma);
        }
        return $danhSachDanhMuc;
    }
}