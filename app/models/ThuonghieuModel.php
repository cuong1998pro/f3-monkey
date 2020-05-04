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
        $sql = "UPDATE thuonghieu SET ten = :ten, anh = :anh, link = :link WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':link', $data['link']);
        return ($this->db->execute());
    }
    public function themThuongHieu($data)
    {
        $sql = "INSERT INTO thuonghieu (ten, anh, link) VALUES (:ten, :anh, :link)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':link', $data['link']);
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
        $sql = 'select * from thuonghieu';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }

    public function layThuongHieu($ma)
    {
        $sql = 'select * from thuonghieu where ma = ' . $ma;
        $this->db->query($sql);
        return $this->db->first();
    }
}
