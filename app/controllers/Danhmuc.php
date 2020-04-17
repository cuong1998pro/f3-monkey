<?php
    class Danhmuc extends Controller{
        public function __construct()
        {
            $this->DanhmucModel = $this->model('DanhmucModel');
        }
    
        public function index()
        {
            $data =  $this->DanhmucModel->layDanhSach();
            // var_dump($data);die();
            $this->view('backend/pages/quanly/Danhmuc',  $data);
        }
        public function them()
        {
            $data['ten'] = $_POST['ten'];
            $data['anh'] = $_POST['anh'];
            $data['link'] = $_POST['link'];
            $this->DanhmucModel->themDanhmuc($data);
            redirect('nhacungcap/index');
        }

        public function sua()
        {
            $data['ten'] = $_POST['ten'];
            $data['anh'] = $_POST['anh'];
            $data['link'] = $_POST['link'];
            $this->DanhmucModel->themDanhmuc($data);
            redirect('nhacungcap/index');
        }

        public function xoa($ma)
        {
            $this->DanhmucModel->themDanhmuc($ma);
            redirect('nhacungcap/index');
        }
     }
?>