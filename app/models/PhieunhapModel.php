<?php
require_once('ChitietphieunhapModel.php');
require_once('AnhsanphamModel.php');

class PhieunhapModel {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
        $this->ChitietphieunhapModel = new ChitietphieunhapModel();
        $this->AnhsanphamModel = new AnhsanphamModel();

    }
    public function themPhieuNhap($data){
        $sql = "insert into phieunhap(manhacungcap, lydonhap) values(:manhacungcap, :lydonhap)";
        $this->db->query($sql);
        $this->db->bind(':manhacungcap', $data['manhacungcap']);
        $this->db->bind(':lydonhap', $data['lydonhap']);
        $this->db->execute();
    }

    public function themPhieuNhapLayId($data)
    {
        $sql = "insert into phieunhap(manhacungcap, lydonhap) values(:manhacungcap, :lydonhap)";
        $this->db->query($sql);
        $this->db->bind(':manhacungcap', $data['manhacungcap']);
        $this->db->bind(':lydonhap', $data['lydonhap']);
        $this->db->execute();
        return $this->db->lastInsertId();
    }
    public function suaPhieuNhap($data)
    {
        $sql = "update phieunhap set manhacungcap= :manhacungcap, lydonhap=:lydonhap where ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':manhacungcap', $data['manhacungcap']);
        $this->db->bind(':lydonhap', $data['lydonhap']);
        $this->db->bind(':ma', $data['ma']);
        $this->db->execute();
    }

    public function xoaPhieuNhap($maphieunhap)
    {
        $sql = "DELETE FROM chitietphieunhap WHERE maphieunhap =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $maphieunhap);
        $this->db->execute();
        $sql = "DELETE FROM phieunhap WHERE ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $maphieunhap);
        $this->db->execute();
    }
    
    public function layDanhSach(){
        $sql = 'select phieunhap.*, nhacungcap.ten as nhacungcap from phieunhap inner join nhacungcap on nhacungcap.ma = phieunhap.manhacungcap order by ngaynhap desc';
        $this->db->query($sql);
        $danhsachphieunhap = $this->db->fetchAll();
        foreach($danhsachphieunhap as $phieunhap){
            $phieunhap->danhsachchitiet = $this->ChitietphieunhapModel->layDanhSach($phieunhap->ma);
            $phieunhap->tongtien = 0;
            foreach($phieunhap->danhsachchitiet as $sanpham){
                $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->ma)->anh;
                $phieunhap->tongtien += $sanpham->dongia * $sanpham->soluong;
            }
        }
        return $danhsachphieunhap;
    }

    public function layPhieuNhap($maphieunhap){
        $sql = 'select * from phieunhap where ma = '. $maphieunhap. ';';
        $this->db->query($sql);
        return $this->db->first();
    }
}