<?php
class KhuyenmaiModel {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function themKhuyenMai($data){
        $sql = "insert into nhacungcap(ten, sodienthoai, diachi, email, nguoilienhe) values(:ten, :sodienthoai, :diachi,:email, :nguoilienhe)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':nguoilienhe', $data['nguoilienhe']);
        $this->db->execute();
    }

    public function suaNCC($data)
    {
        $sql = "update nhacungcap set ten = :ten, sodienthoai = :sodienthoai, diachi =:diachi, email= :email, nguoilienhe=:nguoilienhe where ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma',$data['ma']);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':nguoilienhe', $data['nguoilienhe']);
        $this->db->execute();
    }

    public function xoaNCC($maNCC)
    {
        $sql = "DELETE FROM nhacungcap WHERE ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $maNCC);
        $this->db->execute();
    }
    
    public function layDanhSach(){
        $sql = 'select * from khuyenmai';
        $this->db->query($sql);
        return $this->db->fetchTable('khuyenmai');
    }

    public function layNhaCungCap($maNCC){
        $sql = 'select * from nhacungcap where ma = '. $maNCC. ';';
        $this->db->query($sql);
        return $this->db->first();
    }
}