<?php
class LuachonModel {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function themLuachon($data){
        $sql = "INSERT INTO luachon (masanpham,chitiet, gianiemyet) values(:masanpham, :chitiet, :gianiemyet)";
        $this->db->query($sql);
        $this->db->bind(':masanpham', $data['masanpham']);
        $this->db->bind(':chitiet', $data['chitiet']);
        $this->db->bind(':gianiemyet', $data['gianiemyet']);
        $this->db->execute();
    }

    public function suaLuachon($data)
    {
        $sql = "UPDATE luachon SET masanpham = :masanpham, chitiet = :chitiet, gianiemyet =:gianiemyet where ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':masanpham', $data['masanpham']);
        $this->db->bind(':chitiet', $data['chitiet']);
        $this->db->bind(':gianiemyet', $data['gianiemyet']);
        $this->db->execute();
    }

    public function xoaLuachon($ma)
    {
        $sql = "DELETE FROM luachon WHERE ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $ma);
        $this->db->execute();
    }
    
    public function layDanhSach(){
        $sql = 'select * from luachon';
        $this->db->query($sql);
        return $this->db->fetchAll();
        
    }
}