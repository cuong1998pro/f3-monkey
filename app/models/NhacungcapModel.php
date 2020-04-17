<?php
class NhacungcapModel {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function themNCC($data){
        $sql = "insert into nhacungcap(ten, sodienthoai, diachi, email, nguoilienhe) values(:ten, :sodienthoai, :diachi,:email, :nguoilienhe)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':nguoilienhe', $data['nguoilienhe']);
        $this->db->execute();
    }

    public function layDanhSach(){
        $sql = 'select * from nhacungcap';
        $this->db->query($sql);
        return $this->db->fetchAll();
        
    }
}