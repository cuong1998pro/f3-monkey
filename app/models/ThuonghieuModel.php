<?php
class ThuonghieuModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function suaThuongHieu($data)
    {
        $sql = "UPDATE thuonghieu SET ten = :ten, ghichu = :ghichu, link = :link, madanhmuc = :madanhmuc WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':ghichu', $data['ghichu']);
        $this->db->bind(':link', $data['link']);
        $this->db->bind(':madanhmuc', $data['madanhmuc']);
        $this->db->bind(':ma', $data['ma']);
        return ($this->db->execute());
    }
    public function themThuongHieu($data)
    {
        $sql = "INSERT INTO thuonghieu (ten, ghichu, link, madanhmuc) VALUES (:ten, :ghichu, :link, :madanhmuc)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':ghichu', $data['ghichu']);
        $this->db->bind(':link', $data['link']);
        $this->db->bind(':madanhmuc', $data['madanhmuc']);
        return ($this->db->execute());
    }
    public function xoaThuongHieu($maThuongHieu)
    {
        $sql = "DELETE FROM thuonghieu WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $maThuongHieu);
        return ($this->db->execute());
    }

    public function layDanhSach()
    {
        $sql = 'select thuonghieu.*, danhmuc.ten as danhmuc from thuonghieu inner join danhmuc on danhmuc.ma = thuonghieu.madanhmuc';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }

    public function layThuongHieu($ma)
    {
        $sql = 'select thuonghieu.*, danhmuc.ten as danhmuc from thuonghieu inner join danhmuc on danhmuc.ma = thuonghieu.madanhmuc where thuonghieu.ma = ' . $ma;
        $this->db->query($sql);
        return $this->db->first();
    }

    public function layThuongHieuTheoDanhMuc($madanhmuc){
        $sql = 'select * from thuonghieu where madanhmuc = '.$madanhmuc;
        $this->db->query($sql);
        return $this->db->fetchAll();
    }
}
