<?php
require_once('AnhsanphamModel.php');
class BanggiaModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        $this->AnhsanphamModel = new AnhsanphamModel();
    }

    public function themBangGia($data)
    {
        $sql = "insert into banggia(giamgia, masanpham) value(:giamgia, :masanpham)";
        $this->db->query($sql);
        $this->db->bind(':giamgia', $data['giamgia']);
        $this->db->bind(':masanpham', $data['masanpham']);
        return ($this->db->execute());
    }

    public function suaBangGia($data)
    {
        $sql = "UPDATE banggia SET giamgia = :giamgia, gia = :gia, ngaybatdau = :ngaybatdau WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':giamgia', $data['giamgia']);
        $this->db->bind(':gia', $data['gia']);
        $this->db->bind(':ma', $data['ma']);
        $this->db->bind(':ngaybatdau', $data['ngaybatdau']);
        return ($this->db->execute());
    }

    public function layDanhSach()
    {
        $sql = 'select * from sanpham';
        $this->db->query($sql);
        $dssanpham = $this->db->fetchAll();
        foreach ($dssanpham as $sanpham) {
            $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->ma)->anh;
            $sanpham->gia = strval(number_format($this->layGia($sanpham->ma)->gia)) . 'đ';
            $sanpham->giamgia = number_format($this->layGia($sanpham->ma)->giamgia) . 'đ';
            $sanpham->ngaybatdau = $this->layGia($sanpham->ma)->ngaybatdau;
            $sanpham->mabanggia = $this->layGia($sanpham->ma)->ma;

        }
        return $dssanpham;
    }

    public function layGia($masanpham)
    {
        $sql = 'select * from banggia where masanpham = ' . $masanpham;
        $this->db->query($sql);
        return $this->db->first();
    }

    public function layBangGia($ma)
    {
        $sql = "select *, banggia.ma as 'mabanggia' from banggia where ma = " . $ma;
        $this->db->query($sql);
        return $this->db->first();
    }

    public function xoaBangGia($data)
    {
        $sql = "delete from banggia WHERE ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $data['ma']);
        return ($this->db->execute());
    }
}
