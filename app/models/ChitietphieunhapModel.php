<?php
require_once('AnhsanphamModel.php');
class ChitietphieunhapModel
{
    public function __construct()
    {
        $this->db = new Database;
        $this->AnhsanphamModel = new AnhsanphamModel();
    }
    public function them($data)
    {
        $sql = "insert into chitietphieunhap(maphieunhap, masanpham, soluong, dongia) 
                values(:maphieunhap, :masanpham, :soluong, :dongia)";
        $this->db->query($sql);
        $this->db->bind(':maphieunhap', $data['maphieunhap']);
        $this->db->bind(':masanpham', $data['masanpham']);
        $this->db->bind(':soluong', $data['soluong']);
        $this->db->bind(':dongia', $data['dongia']);
        $this->db->execute();
    }

    public function sua($data)
    {
        $sql = "update chitietphieunhap set maphieunhap = :maphieunhap, masanpham = :masanpham, 
                soluong =:soluong, dongia= :dongia where ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $data['ma']);
        $this->db->bind(':maphieunhap', $data['maphieunhap']);
        $this->db->bind(':masanpham', $data['masanpham']);
        $this->db->bind(':soluong', $data['soluong']);
        $this->db->bind(':dongia', $data['dongia']);
        $this->db->execute();
    }

    public function xoa($machitietphieunhap)
    {
        $sql = "DELETE FROM chitietphieunhap WHERE ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $machitietphieunhap);
        $this->db->execute();
    }

    public function layDanhSach($maphieunhap)
    {
        $sql = 'select *, chitietphieunhap.ma as \'machitiet\'  from chitietphieunhap inner join sanpham on sanpham.ma = chitietphieunhap.masanpham
                 where maphieunhap = ' . $maphieunhap;
        $this->db->query($sql);
        $ctpn =  $this->db->fetchAll();
        foreach ($ctpn as $sanpham) {
            $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->ma)->anh;
        }
        return $ctpn;
    }

   
}
