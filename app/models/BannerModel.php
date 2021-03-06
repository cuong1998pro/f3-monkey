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
        $this->db->bind(':ma', $data['ma']);
        return ($this->db->execute());
    }
    
    public function layDanhSach(){
        $sql = 'select * from banner';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }

    public function layBanner($ma)
    {
        $sql = 'select * from banner where ma = '. $ma;
        $this->db->query($sql);
        return $this->db->first();
    }

    public function suaDuongDan($data){
        $sql = "UPDATE banner SET  link = :link WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':link', $data['link']);
        $this->db->bind(':ma', $data['ma']);
        return ($this->db->execute());
    }
}