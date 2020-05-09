<?php
class Webshop extends Controller{

    public function __construct()
    {
        $this->DanhmucModel = $this->model('LoaisanphamModel');
        $this->SliderModel = $this->model('SliderModel');
        $this->BannerModel = $this->model('BannerModel');
        $this->SanphamModel = $this->model('SanphamModel');

    }

    public function index(){
        $danhmuc = $this->DanhmucModel->layDanhSachChiTiet();
        $slider = $this->SliderModel->layDanhSach();
        $banner = $this->BannerModel->layDanhSach();
        $data = [
            'danhmuc' => $danhmuc,
            'slider' => $slider,
            'banner' => $banner
        ];
        $this->view('frontend/index', $data);
    }
    
    public function loc_san_pham(){
        $data['sanpham'] = $this->SanphamModel->layDanhSachChiTiet();
        $this->view('frontend/product_filter', $data);
    }

    public function thanh_toan(){
        $data['sanpham'] = $this->SanphamModel->layDanhSachChiTiet();
        $this->view('frontend/checkout', $data);
    }
  
   
}