<?php
class Banner extends Controller
{
    public function __construct()
    {
        $this->BannerModel = $this->model('BannerModel');
    }

    public function index()
    {
        $data =  $this->BannerModel->layDanhSach();
        $this->view('backend/pages/quanly/banner',  $data);
    }


    public function capnhat($ma)
    {
        $data =  $this->BannerModel->layBanner($ma);
        $this->view('backend/pages/quanly/capnhatbanner',  $data);
    }
    public function sua($ma)
    {
        $data['ma'] = $ma;
        if (!empty($_FILES['anh']['name'])) {
            $data['anh'] = $_FILES['anh']['name'];
            $data['link'] = $_POST['link'];
            uploadImage();
            $this->BannerModel->suaBanner($data);
            redirect('banner/index');
        }else{
            $data['link'] = $_POST['link'];
            $this->BannerModel->suaDuongDan($data);
            redirect('banner/index');
        }
    }
}
