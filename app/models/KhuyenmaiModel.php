<?php
class KhuyenmaiModel {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function themKhuyenMai($data){
        $sql = "insert into khuyenmaisanpham(khuyenmai, ngaybatdau, masanpham) values(:khuyenmai, :ngaybatdau, :masanpham)";
        $this->db->query($sql);
        $this->db->bind(':khuyenmai', $data['khuyenmai']);
        $this->db->bind(':ngaybatdau', $data['ngaybatdau']);
        $this->db->bind(':masanpham', $data['masanpham']);
        $this->db->execute();
    }

    public function suaKhuyenMai($data)
    {
        $sql = "update khuyenmaisanpham set khuyenmai = :khuyenmai, ngaybatdau = :ngaybatdau where ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma',$data['ma']);
        $this->db->bind(':khuyenmai', $data['khuyenmai']);
        $this->db->bind(':ngaybatdau', $data['ngaybatdau']);
        $this->db->execute();
    }

    public function xoaKhuyenMai($makhuyenmai)
    {
        $sql = "DELETE FROM khuyenmaisanpham WHERE ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $makhuyenmai);
        $this->db->execute();
    }
    
    public function layDanhSach($masanpham ){
        $sql = 'select * from khuyenmaisanpham where masanpham = '. $masanpham;
        $this->db->query($sql);
        return $this->db->fetchAll();
    }

    public function layKhuyenMai($makhuyenmai ){
        $sql = 'select * from khuyenmaisanpham where ma = '. $makhuyenmai;
        $this->db->query($sql);
        return $this->db->first();
    }

}