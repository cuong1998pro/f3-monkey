<?php
class KhachhangModel {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function themKhachhang($data){
        $sql = "INSERT INTO khachhang (tendangnhap, hoten, diachi, sodienthoai, matkhau) values(:tendangnhap, :hoten, :diachi, :sodienthoai, :matkhau)";
        $this->db->query($sql);
        $this->db->bind(':tendangnhap', $data['tendangnhap']);
        $this->db->bind(':hoten', $data['hoten']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        $this->db->bind(':matkhau', $data['matkhau']);
        $this->db->execute();
    }

    public function suaKhachhang($data)
    {
        $sql = "UPDATE khachhang SET  hoten = :hoten, diachi =:diachi, sodienthoai= :sodienthoai, matkhau=:matkhau where ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':hoten', $data['hoten']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        $this->db->bind(':matkhau', $data['matkhau']);
        $this->db->bind(':ma', $data['ma']);

        $this->db->execute();
    }

    public function xoaKhachhang($ma)
    {
        $sql = "DELETE FROM khachhang WHERE ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $ma);
        $this->db->execute();
    }
    
    public function layDanhSach(){
        $sql = 'select ma, tendangnhap, hoten, diachi, sodienthoai from khachhang';
        $this->db->query($sql);
        return $this->db->fetchTable('khachhang');
    }

    public function layKhachhang($ma){
        $sql = 'select * from khachhang where ma = '. $ma. ';';
        $this->db->query($sql);
        return $this->db->first();
    }
}