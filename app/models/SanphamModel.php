<?php 
class SanphamModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
        //ten , anh, madanhmuc, mota, mausac, luachon, gianiemyet, noidung, tinhtrang, khuyenmai, thongtinchitiet, thongsokythuat 
    public function suaSanpham($data){
        $sql = "UPDATE sanpham SET ten=:ten, anh=:anh, madanhmuc=:madanhmuc, mota=:mota, mausac=:mausac, luachon=:luachon, gianiemyet=:gianiemyet, noidung=:noidung, tinhtrang=:tinhtrang, khuyenmai=:khuyenmai, thongtinchitiet=:thongtinchitiet, thongsokythuat=:thongsokythuat  WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':madanhmuc', $data['madanhmuc']);
        $this->db->bind(':mota', $data['mota']);
        $this->db->bind(':mausac', $data['mausac']);
        $this->db->bind(':luachon', $data['luachon']);
        $this->db->bind(':gianiemyet', $data['gianiemyet']);
        $this->db->bind(':noidung', $data['noidung']);
        $this->db->bind(':tinhtrang', $data['tinhtrang']);
        $this->db->bind(':khuyenmai', $data['khuyenmai']);
        $this->db->bind(':thongtinchitiet', $data['thongtinchitiet']);
        $this->db->bind(':thongsokythuat', $data['thongsokythuat']);
        return ($this->db->execute());
    }
    public function themSanpham($data){
        $sql = "INSERT INTO sanpham (ten , anh, madanhmuc, mota, mausac, luachon, gianiemyet, noidung, tinhtrang, khuyenmai, thongtinchitiet, thongsokythuat) VALUES (:ten , :anh, :madanhmuc, :mota, :mausac, :luachon, :gianiemyet, :noidung, :tinhtrang, :khuyenmai, :thongtinchitiet, :thongsokythuat)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':anh', $data['anh']);
        $this->db->bind(':madanhmuc', $data['madanhmuc']);
        $this->db->bind(':mota', $data['mota']);
        $this->db->bind(':mausac', $data['mausac']);
        $this->db->bind(':luachon', $data['luachon']);
        $this->db->bind(':gianiemyet', $data['gianiemyet']);
        $this->db->bind(':noidung', $data['noidung']);
        $this->db->bind(':tinhtrang', $data['tinhtrang']);
        $this->db->bind(':khuyenmai', $data['khuyenmai']);
        $this->db->bind(':thongtinchitiet', $data['thongtinchitiet']);
        $this->db->bind(':thongsokythuat', $data['thongsokythuat']);
        return ($this->db->execute());
    }
    public function xoaSanpham($maTintuc)
    {
        $sql = "DELETE FROM sanpham WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $maTintuc);
        return ($this->db->execute());
    }
    
    public function layDanhSach(){
        $sql = 'select * from sanpham';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }
}