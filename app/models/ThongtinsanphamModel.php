<?php
class ThongtinsanphamModel {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function themThongtinsanpham($data){
        $sql = "INSERT INTO thongsosanpham (ten, giatri, masanpham) values(:ten, :giatri, :masanpham)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':giatri', $data['giatri']);
        $this->db->bind(':masanpham', $data['masanpham']);
        $this->db->execute();
    }

    public function suaThongtinsanpham($data)
    {
        $sql = "UPDATE thongsosanpham SET ten = :ten, giatri = :giatri, masanpham =:masanpham where ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':giatri', $data['giatri']);
        $this->db->bind(':masanpham', $data['masanpham']);
        $this->db->execute();
    }

    public function xoaThongtinsanpham($ma)
    {
        $sql = "DELETE FROM thongsosanpham WHERE ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $ma);
        $this->db->execute();
    }
    
    public function layDanhSach(){
        $sql = 'select * from thongsosanpham';
        $this->db->query($sql);
        return $this->db->fetchAll();
        
    }
}