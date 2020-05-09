
<?php
class Giohang extends Controller
{

    public function __construct()
    {
        $this->DanhmucModel = $this->model('LoaisanphamModel');
        $this->SliderModel = $this->model('SliderModel');
        $this->BannerModel = $this->model('BannerModel');
        $this->SanphamModel = $this->model('SanphamModel');
    }

    public function index()
    {
        $data = [];
        $this->view('frontend/cart', $data);
    }
}
