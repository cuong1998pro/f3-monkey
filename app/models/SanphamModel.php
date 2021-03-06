<?php 
require_once('AnhsanphamModel.php');
require_once('BanggiaModel.php');
require_once('KhuyenmaiModel.php');
require_once('ThongsosanphamModel.php');

class SanphamModel{


    private $db;

    public function __construct()
    {
        $this->db = new Database;
        $this->AnhsanphamModel = new AnhsanphamModel();
        $this->BanggiaModel = new BanggiaModel();
        $this->KhuyenmaiModel = new KhuyenmaiModel();
        $this->ThongsosanphamModel = new ThongsosanphamModel();

    }
        //ten , anh, madanhmuc, mota, mausac, luachon, gianiemyet, noidung, tinhtrang, khuyenmai, thongtinchitiet, thongsokythuat 
    public function suaSanpham($data){
        $sql = "UPDATE sanpham set ten = :ten , madanhmuc = :madanhmuc, mathuonghieu = :mathuonghieu, motasanpham = :mota, tinhtrang = :tinhtrang where ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $data['ma']);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':madanhmuc', $data['madanhmuc']);
        $this->db->bind(':mathuonghieu', $data['mathuonghieu']);
        $this->db->bind(':mota', $data['mota']);
        $this->db->bind(':tinhtrang', $data['tinhtrang']);
        return ($this->db->execute());
    }
    public function themSanpham($data){
        $sql = "INSERT INTO sanpham (ten , madanhmuc, mathuonghieu, motasanpham, tinhtrang) 
        VALUES (:ten , :madanhmuc, :mathuonghieu, :mota, :tinhtrang)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':madanhmuc', $data['madanhmuc']);
        $this->db->bind(':mathuonghieu', $data['mathuonghieu']);
        $this->db->bind(':mota', $data['mota']);
        $this->db->bind(':tinhtrang', $data['tinhtrang']);
         ($this->db->execute());
         return $this->db->lastInsertId();
    }
    public function xoaSanpham($maTintuc)
    {
        $sql = "Delete from anhsanpham where masanpham = :ma;DELETE FROM sanpham WHERE ma = :ma; ";
        $this->db->query($sql);
        $this->db->bind(':ma', $maTintuc);
        return ($this->db->execute());
    }
    
    public function layDanhSach(){
        $sql = 'select sanpham.ma, sanpham.ten, motasanpham, danhmuc.ten as danhmuc, thuonghieu.ten as \'thuonghieu\', tinhtrang 
        from sanpham inner join thuonghieu on thuonghieu.ma = sanpham.mathuonghieu
        inner join danhmuc on danhmuc.ma = sanpham.madanhmuc';
        $this->db->query($sql);
        $dssanpham = $this->db->fetchAll();
        foreach ($dssanpham as $sanpham) {
            $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->ma)->anh;
        }
        return $dssanpham;
        
    }

    public function layDanhSachTheoDanhMuc($duongdan )
    {
        $sql = "select sanpham.ma, sanpham.ten, motasanpham, danhmuc.ten as danhmuc, thuonghieu.ten as 'thuonghieu', tinhtrang 
        from sanpham inner join thuonghieu on thuonghieu.ma = sanpham.mathuonghieu
        inner join danhmuc on danhmuc.ma = sanpham.madanhmuc where danhmuc.link like '$duongdan' ";
        $this->db->query($sql);
        $dssanpham = $this->db->fetchAll();
        foreach ($dssanpham as $sanpham) {
            $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->ma)->anh;
            $sanpham->giagoc = strval(number_format($this->BanggiaModel->layGia($sanpham->ma)->gia)) . 'đ';
            $sanpham->giaban = number_format($this->BanggiaModel->layGia($sanpham->ma)->gia - $this->BanggiaModel->layGia($sanpham->ma)->giamgia) . 'đ';
        }
        return $dssanpham;
    }
    public function layDanhSachTheoThuongHieu($duongdan)
    {
        $sql = "select sanpham.ma, sanpham.ten, motasanpham, danhmuc.ten as danhmuc, thuonghieu.ten as 'thuonghieu', tinhtrang 
        from sanpham inner join thuonghieu on thuonghieu.ma = sanpham.mathuonghieu
        inner join danhmuc on danhmuc.ma = sanpham.madanhmuc where thuonghieu.link like '$duongdan'";
        $this->db->query($sql);
        $dssanpham = $this->db->fetchAll();
        foreach ($dssanpham as $sanpham) {
            $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->ma)->anh;
            $sanpham->giagoc = strval(number_format($this->BanggiaModel->layGia($sanpham->ma)->gia)) . 'đ';
            $sanpham->giaban = number_format($this->BanggiaModel->layGia($sanpham->ma)->gia - $this->BanggiaModel->layGia($sanpham->ma)->giamgia) . 'đ';
        }
        return $dssanpham;
    }

    public function layDanhSachTheoTuKhoa($tukhoa)
    {
        $sql = "select sanpham.ma, sanpham.ten, motasanpham, danhmuc.ten as danhmuc, thuonghieu.ten as 'thuonghieu', tinhtrang 
        from sanpham inner join thuonghieu on thuonghieu.ma = sanpham.mathuonghieu
        inner join danhmuc on danhmuc.ma = sanpham.madanhmuc where thuonghieu.ten like '%$tukhoa%' or danhmuc.ten like '%$tukhoa%' or sanpham.ten like '%$tukhoa%'";
        $this->db->query($sql);
        $dssanpham = $this->db->fetchAll();
        foreach ($dssanpham as $sanpham) {
            $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->ma)->anh;
            $sanpham->giagoc = strval(number_format($this->BanggiaModel->layGia($sanpham->ma)->gia)) . 'đ';
            $sanpham->giaban = number_format($this->BanggiaModel->layGia($sanpham->ma)->gia - $this->BanggiaModel->layGia($sanpham->ma)->giamgia) . 'đ';
        }
        return $dssanpham;
    }


    public function laySanPhamTheoThuongHieu($mathuonghieu){
        $sql = 'select * from sanpham where mathuonghieu = '.$mathuonghieu;
        $this->db->query($sql);
        return $this->db->fetchAll();
    }

    public function laySanphamTheoDanhMuc($madanhmuc){
        $sql = 'select * from sanpham where madanhmuc = '.$madanhmuc .' order by ma desc limit 10 ';
        $this->db->query($sql);
        $dssanpham = $this->db->fetchAll();
        foreach($dssanpham as $sanpham){
            $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->ma)->anh;
            if (($this->BanggiaModel->layGia($sanpham->ma))) {

                $sanpham->giagoc =strval( number_format($this->BanggiaModel->layGia($sanpham->ma)->gia)).'đ' ;
                $sanpham->giaban = number_format($this->BanggiaModel->layGia($sanpham->ma)->gia - $this->BanggiaModel->layGia($sanpham->ma)->giamgia).'đ';
            }
        }
        return $dssanpham;
    }

    public function layDanhSachChiTiet()
    {
        $sql = 'select * from sanpham';
        $this->db->query($sql);
        $dssanpham = $this->db->fetchAll();
        foreach ($dssanpham as $sanpham) {
            $sanpham->anh = $this->AnhsanphamModel->layMotAnh($sanpham->ma)->anh;
            $sanpham->giagoc = strval(number_format($this->BanggiaModel->layGia($sanpham->ma)->gia)) . 'đ';
            $sanpham->giaban = number_format($this->BanggiaModel->layGia($sanpham->ma)->gia - $this->BanggiaModel->layGia($sanpham->ma)->giamgia) . 'đ';
        }
        return $dssanpham;
    }

    public function layChiTietSanPham($masanpham){
        $sql = 'select * from f3_monkey.sanpham where ma = '.$masanpham ;
        // $sql = 'select * from sanpham where madanhmuc = '.$madanhmuc . 'limit 10';
        $this->db->query($sql);
        $sanpham = $this->db->first();
        $sanpham->anh = $this->AnhsanphamModel->layDanhSach($sanpham->ma);
        if(($this->BanggiaModel->layGia($sanpham->ma))){
            $sanpham->giagoc = strval(number_format($this->BanggiaModel->layGia($sanpham->ma)->gia)) . 'đ';
            $sanpham->giaban = number_format($this->BanggiaModel->layGia($sanpham->ma)->gia - $this->BanggiaModel->layGia($sanpham->ma)->giamgia) . 'đ';
        }
        $sanpham->khuyenmai = $this->KhuyenmaiModel->layDanhSach($sanpham->ma);
        $sanpham->dsthongsokythuat = $this->ThongsosanphamModel->layDanhSach($sanpham->ma);
        return $sanpham;
    }
    
}