<?php 
class TintucModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function suaTintuc($data){
        $sql = "UPDATE tintuc SET tieude = :tieude, anh = :anh, tomtat = :tomtat, noidung = :noidung WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':tieude', $data['tieude']);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':tomtat', $data['tomtat']);
        $this->db->bind(':noidung', $data['noidung']);
        return ($this->db->execute());
    }
    public function themTintuc($data){
        $sql = "INSERT INTO tintuc (tieude, anh, tomtat, noidung) VALUES (:tieude, :anh, :tomtat, :noidung)";
        $this->db->query($sql);
        $this->db->bind(':tieude', $data['tieude']);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':tomtat', $data['tomtat']);
        $this->db->bind(':noidung', $data['noidung']);
        return ($this->db->execute());
    }
    public function xoaTintuc($maTintuc)
    {
        $sql = "DELETE FROM tintuc WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $maTintuc);
        return ($this->db->execute());
    }
    
    public function layDanhSach(){
        $sql = 'select * from tintuc';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }
}