<?php
class ThanhtoanModel {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function themThanhtoan($data){
        $sql = "insert into thanhtoan(hinhthucthanhtoan, trangthai, ngaythanhtoan) values(:hinhthucthanhtoan, :trangthai, :ngaythanhtoan)";
        $this->db->query($sql);
        $this->db->bind(':ma',$data['ma']);
        $this->db->bind(':hinhthucthanhtoan', $data['ten']);
        $this->db->bind(':trangthai', $data['trangthai']);
        $this->db->bind(':ngaythanhtoan', $data['ngaythanhtoan']);
        $this->db->execute();
    }

    public function suaThanhtoan($data)
    {
        $sql = "update thanhtoan set hinhthucthanhtoan = :hinhthucthanhtoan, trangthai = :trangthai, ngaythanhtoan =:ngaythanhtoan where ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma',$data['ma']);
        $this->db->bind(':hinhthucthanhtoan', $data['ten']);
        $this->db->bind(':trangthai', $data['trangthai']);
        $this->db->bind(':ngaythanhtoan', $data['ngaythanhtoan']);
        $this->db->execute();
    }

    public function xoaThanhtoan($ma)
    {
        $sql = "DELETE FROM thanhtoan WHERE ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $ma);
        $this->db->execute();
    }
    
    public function layDanhSach(){
        $sql = 'select * from thanhtoan';
        $this->db->query($sql);
        return $this->db->fetchTable( 'thanhtoan');
    }

    public function layThanhtoan($ma){
        $sql = 'select * from thanhtoan where ma = '. $ma. ';';
        $this->db->query($sql);
        return $this->db->first();
    }
}