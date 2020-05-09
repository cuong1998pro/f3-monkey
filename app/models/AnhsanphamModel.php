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
        $sql = "INSERT INTO anhsanpham (anh, masanpham) VALUES (:anh, :masanpham)";
        $this->db->query($sql);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':masanpham', $data['masanpham']);
        return ($this->db->execute());
    }
    public function xoaAnhsanpham($maAnhsanpham)
    {
        $sql = "DELETE FROM Anhsanpham WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $maAnhsanpham);
        return ($this->db->execute());
    }
    
    public function layDanhSach($masanpham){
        $sql = 'select * from anhsanpham where masanpham = '. $masanpham;
        $this->db->query($sql);
        return $this->db->fetchAll();
    }
    public function layMotAnh($masanpham){
        $sql = 'select * from anhsanpham where masanpham = '.$masanpham;
        $this->db->query($sql);
        return $this->db->first();
    }

    public function layHinhAnh($ma)
    {
        $sql = 'select * from anhsanpham where ma = ' . $ma;
        $this->db->query($sql);
        return $this->db->first();
    }
    public function layMaAnhMoi($masanpham){
        $sql = 'select * from anhsanpham where masanpham = ' . $masanpham;
        $this->db->query($sql);
        $this->db->execute();
        $temp = $this->db->count();
        return ++$temp;
    }
}