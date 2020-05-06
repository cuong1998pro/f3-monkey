<?php
class Page extends Controller{

    public function __construct()
    {
        $this->DanhmucModel = $this->model('LoaisanphamModel');
        $this->SliderModel = $this->model('SliderModel');
        $this->BannerModel = $this->model('BannerModel');

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
    
   
}