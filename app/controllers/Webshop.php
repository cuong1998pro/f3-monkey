<?php
class Webshop extends Controller{

    public function __construct()
    {
        $this->DanhmucModel = $this->model('LoaisanphamModel');
        $this->SliderModel = $this->model('SliderModel');
        $this->BannerModel = $this->model('BannerModel');
        $this->SanphamModel = $this->model('SanphamModel');
        $this->GiohangModel = $this->model('GiohangModel');

    }

    public function index(){
        $danhmuc = $this->DanhmucModel->layDanhSachChiTiet();
        $slider = $this->SliderModel->layDanhSach();
        $banner = $this->BannerModel->layDanhSach();
        $giohang = $this->GiohangModel->layGioHang();
        $data = [
            'danhmuc' => $danhmuc,
            'slider' => $slider,
            'banner' => $banner,
            'giohang' => $giohang
        ];
        $this->view('frontend/index', $data);
    }
    
    public function thuonghieu($duongdan){
        $data['giohang'] = $this->GiohangModel->layGioHang();
        $data['sanpham'] = $this->SanphamModel->layDanhSachTheoThuongHieu($duongdan);
        $this->view('frontend/product_filter', $data);
    }

    public function danhmuc($duongdan)
    {
        $data['giohang'] = $this->GiohangModel->layGioHang();
        $data['sanpham'] = $this->SanphamModel->layDanhSachTheoDanhMuc($duongdan);
        $this->view('frontend/product_filter', $data);
    }

    public function search($tukhoa)
    {
        $data['giohang'] = $this->GiohangModel->layGioHang();
        $data['sanpham'] = $this->SanphamModel->layDanhSachTheoTuKhoa($tukhoa);
        $this->view('frontend/product_filter', $data);
    }
    
    public function thanh_toan(){
        $data['giohang'] = $this->GiohangModel->layGioHang();
        $this->view('frontend/checkout', $data);
    }
  
   
}