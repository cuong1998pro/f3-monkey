<?php 
class CuahangModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function capNhat($data){
        $sql = "update cuahang set ten = :ten, diachi = :diachi, sodienthoai = :sodienthoai)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        return ($this->db->execute());
    }
    
    public function layThongTin(){
        $sql = 'select * from cuahang';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }
}