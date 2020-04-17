<?php
    class Banner extends Controller{
        public function __construct()
        {
            $this->BannerModel = $this->model('BannerModel');
        }
    
        public function index()
        {
            $data =  $this->BannerModel->layDanhSach();
            // var_dump($data);die();
            $this->view('backend/pages/quanly/Banner',  $data);
        }
        public function them()
        {
            $data['anh'] = $_POST['anh'];
            $data['link'] = $_POST['link'];
            $this->BannerModel->themBanner($data);
            redirect('nhacungcap/index');
        }

        public function sua()
        {
            $data['anh'] = $_POST['anh'];
            $data['link'] = $_POST['link'];
            $this->BannerModel->themBanner($data);
            redirect('nhacungcap/index');
        }

        public function xoa($ma)
        {
            $this->nhacungcapmodel->xoaBanner($ma);
            redirect('nhacungcap/index');
        }
     }
?>