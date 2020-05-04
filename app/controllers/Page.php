<?php
class Page extends Controller{

    public function __construct()
    {
        $this->SanPhamModel = $this->model('SanphamModel');
        $this->DanhmucModel = $this->model('LoaisanphamModel');
        $this->ThuonghieuModel = $this->model('ThuonghieuModel');
        $this->SliderModel = $this->model('SliderModel');
        $this->BannerModel = $this->model('BannerModel');

    }

    public function index(){
        $sanpham =  $this->SanPhamModel->layDanhSach();
        $danhmuc = $this->DanhmucModel->layDanhSach();
        $thuonghieu = $this->ThuonghieuModel->layDanhSach();
        $slider = $this->SliderModel->layDanhSach();
        $banner = $this->BannerModel->layDanhSach();
        $data = [
            'sanpham' => $sanpham,
            'danhmuc' => $danhmuc,
            'thuonghieu' => $thuonghieu,
            'slider' => $slider,
            'banner' => $banner
        ];
        $this->view('frontend/index', $data);
    }
    
   
}