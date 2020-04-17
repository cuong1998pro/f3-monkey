<?php 
class BannerModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function suaBanner($data){
        $sql = "UPDATE banner SET anh = :anh, link = :link WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':link', $data['link']);
        return ($this->db->execute());
    }
    public function themBanner($data){
        $sql = "INSERT INTO banner (anh, link) VALUES (:anh, :link)";
        $this->db->query($sql);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':link', $data['link']);
        return ($this->db->execute());
    }
    public function xoaCuahang($mabanner)
    {
        $sql = "DELETE FROM banner WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':macuahang', $mabanner);
        return ($this->db->execute());
    }
    
    public function layDanhSach(){
        $sql = 'select * from banner';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }
}