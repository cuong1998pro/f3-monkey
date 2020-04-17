<?php 
class AnhsanphamModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function suaAnhsanpham($data){
        $sql = "UPDATE banner SET anh = :anh, masanpham = :masanpham WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':masanpham', $data['masanpham']);
        return ($this->db->execute());
    }
    public function themAnhsanpham($data){
        $sql = "INSERT INTO Anhsanpham (anh, masanpham) VALUES (:anh, :masanpham)";
        $this->db->query($sql);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':masanpham', $data['masanpham']);
        return ($this->db->execute());
    }
    public function xoaAnhsanpham($maAnhsanpham)
    {
        $sql = "DELETE FROM Anhsanpham WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':macuahang', $maAnhsanpham);
        return ($this->db->execute());
    }
    
    public function layDanhSach(){
        $sql = 'select * from Anhsanpham';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }
}