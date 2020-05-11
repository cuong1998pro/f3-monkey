
<?php
class Sanpham extends Controller
{
    public function __construct()
    {
        $this->SanphamModel = $this->model('SanphamModel');
        $this->DanhmucModel = $this->model('LoaisanphamModel');
        $this->ThuonghieuModel = $this->model('ThuonghieuModel');
        $this->ThongsosanphamModel = $this->model('ThongsosanphamModel');
    }


    public function chi_tiet_san_pham($id)
    {
        $data = $this->SanphamModel->layChiTietSanPham($id);
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
        $data['anh'] = $_POST['anh'];
        $data['madanhmuc'] = $_POST['madanhmuc'];
        $data['mota'] = $_POST['mota'];
        $data['mausac'] = $_POST['mausac'];
        $data['luachon'] = $_POST['luachon'];
        $data['gianienyet'] = $_POST['gianienyet'];
        $data['noidung'] = $_POST['noidung'];
        $data['tinhtrang'] = $_POST['tinhtrang'];
        $data['khuyenmai'] = $_POST['khuyenmai'];
        $data['thongtinchitiet'] = $_POST['thongtinchitiet'];
        $data['thongsokythuat'] = $_POST['thongsokythuat'];
        $this->SanphamModel->themSanPham($data);
        redirect('sanpham/index');
    }

    public function sua()
    {
        $data['ma'] = $_POST['ma'];
        $data['ten'] = $_POST['ten'];
        $data['madanhmuc'] = $_POST['madanhmuc'];
        $data['mathuonghieu'] = $_POST['mathuonghieu'];
        $data['motasanpham'] = $_POST['noidung'];
        $data['tinhtrang'] = $_POST['tinhtrang'];
        $data['khuyenmai'] = $_POST['khuyenmai'];
        $data['thongtinchitiet'] = $_POST['thongtinchitiet'];
        $data['thongsokythuat'] = $_POST['thongsokythuat'];
        $this->TintucModel->suaSanPham($data);
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