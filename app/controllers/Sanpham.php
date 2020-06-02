<?php
class Sanpham extends Controller
{
    public function __construct()
    {
        $this->SanphamModel = $this->model('SanphamModel');
        $this->AnhsanphamModel = $this->model('AnhsanphamModel');
        $this->DanhmucModel = $this->model('LoaisanphamModel');
        $this->ThuonghieuModel = $this->model('ThuonghieuModel');
        $this->ThongsosanphamModel = $this->model('ThongsosanphamModel');
        $this->GiohangModel = $this->model('GiohangModel');
    }

    public function chi_tiet_san_pham($id)
    {
        $data['thongtinsanpham'] = $this->SanphamModel->layChiTietSanPham($id);
        $data['giohang'] = $this->GiohangModel->layGioHang();
        $this->view('frontend/product_detail', $data);
    }

    public function index()
    {
        $sanpham =  $this->SanphamModel->layDanhSach();
        $danhmuc = $this->DanhmucModel->layDanhSach();
        $thuonghieu = $this->ThuonghieuModel->layDanhSach();
        $data = [
            'sanpham' => $sanpham,
            'danhmuc' => $danhmuc,
            'thuonghieu' => $thuonghieu
        ];
        $this->view('backend/pages/quanly/sanpham', $data);
    }


    public function them()
    {
        $data['ten'] = $_POST['ten'];       
        $data['madanhmuc'] = $_POST['madanhmuc'];
        $data['mathuonghieu'] = $_POST['mathuonghieu'];
        $data['mota'] = $_POST['mota'];
        $data['tinhtrang'] = $_POST['tinhtrang'];
        $data['masanpham'] = $this->SanphamModel->themSanPham($data);
        $data['anh'] = $data['masanpham'] . '-' . $this->AnhsanphamModel->layMaAnhMoi($data['masanpham']) . '.jpg';
        uploadImage($data['anh'], 'sanpham/');
        $this->AnhsanphamModel->themAnhsanpham($data); 
        redirect('sanpham/index');
    }

    public function sua()
    {
        $data['ten'] = $_POST['ten'];
        $data['ma'] = $_POST['ma'];
        $data['madanhmuc'] = $_POST['madanhmuc'];
        $data['mathuonghieu'] = $_POST['mathuonghieu'];
        $data['mota'] = $_POST['mota'];
        $data['tinhtrang'] = $_POST['tinhtrang'];
        $this->SanphamModel->suaSanPham($data);
        redirect('sanpham/index');
    }

    public function xoa($ma)
    {
        $this->SanphamModel->xoaSanpham($ma);
        redirect('sanpham/index');
    }
    public function capnhat($masanpham)
    {
        $sanpham =  $this->SanphamModel->layChiTietSanPham($masanpham);
        $danhmuc = $this->DanhmucModel->layDanhSach();
        $thuonghieu = $this->ThuonghieuModel->layDanhSach();
        $data = [
            'sanpham' => $sanpham,
            'danhmuc' => $danhmuc,
            'thuonghieu' => $thuonghieu
        ];
        $this->view('backend/pages/quanly/capnhatsanpham', $data);
    }
}
?>