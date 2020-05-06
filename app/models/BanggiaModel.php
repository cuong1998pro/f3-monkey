<?php
class BanggiaModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function suaSlider($data)
    {
        $sql = "UPDATE slider SET anh = :anh, link = :link WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':link', $data['link']);
        $this->db->bind(':ma', $data['ma']);
        return ($this->db->execute());
    }

    public function layDanhSach()
    {
        $sql = 'select * from slider';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }

    public function layGia($masanpham)
    {
        $sql = 'select * from banggia where masanpham = ' . $masanpham;
        $this->db->query($sql);
        return $this->db->first();
    }

    public function suaDuongDan($data)
    {
        $sql = "UPDATE slider SET  link = :link, noidung = :noidung WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':link', $data['link']);
        $this->db->bind(':noidung', $data['noidung']);
        $this->db->bind(':ma', $data['ma']);
        return ($this->db->execute());
    }
}
