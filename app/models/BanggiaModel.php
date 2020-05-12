<?php
class BanggiaModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function themBangGia($data)
    {
        $sql = "insert into banggia(giamgia, masanpham) value(:giamgia, :masanpham)";
        $this->db->query($sql);
        $this->db->bind(':giamgia', $data['giamgia']);
        $this->db->bind(':masanpham', $data['masanpham']);
        return ($this->db->execute());
    }

    public function suaBangGia($data)
    {
        $sql = "UPDATE banggia SET giamgia = :giamgia, masanpham = :masanpham WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':giamgia', $data['giamgia']);
        $this->db->bind(':masanpham', $data['masanpham']);
        $this->db->bind(':ma', $data['ma']);
        return ($this->db->execute());
    }

    public function layDanhSach()
    {
        $sql = 'select * from banggia';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }

    public function layGia($masanpham)
    {
        $sql = 'select * from banggia where masanpham = ' . $masanpham;
        $this->db->query($sql);
        return $this->db->first();
    }

    public function xoaBangGia($data)
    {
        $sql = "delete from banggia WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $data['ma']);
        return ($this->db->execute());
    }
}
