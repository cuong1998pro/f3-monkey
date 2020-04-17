<?php 
class CuahangModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function suaCuahang($data){
        $sql = "UPDATE cuahang SET ten = :ten, diachi = :diachi, sodienthoai = :sodienthoai, email = :email WHERE macuahang = :macuahang ";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        $this->db->bind(':email', $data['email']);
        return ($this->db->execute());
    }
    public function themCuahang($data){
        $sql = "INSERT INTO cuahang (ten, diachi, sodienthoai, email) VALUE (:ten, :diachi, :sodienthoai, :email)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        $this->db->bind(':email', $data['email']);
        return ($this->db->execute());
    }
    public function xoaCuahang($maCuahang)
    {
        $sql = "DELETE FROM cuahang WHERE macuahang = :macuahang";
        $this->db->query($sql);
        $this->db->bind(':macuahang', $maCuahang);
        return ($this->db->execute());
    }
    
    public function layDanhSach(){
        $sql = 'select * from cuahang';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }
}