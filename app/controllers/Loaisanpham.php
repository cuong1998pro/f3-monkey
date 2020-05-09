<?php
    class Loaisanpham extends Controller{
        public function __construct()
        {
            $this->LoaisanphamModel = $this->model('LoaisanphamModel');
        }
    
        public function index()
        {
            $data =  $this->LoaisanphamModel->layDanhSach();
            $this->view('backend/pages/quanly/Loaisanpham',  $data);
        }
        public function them()
        {
            $data['ten'] = $_POST['ten'];
            $data['ghichu'] = $_POST['ghichu'];
            $data['link'] = $_POST['link'];
            $this->LoaisanphamModel->themDanhmuc($data);
            redirect('loaisanpham/index');
        }
        public function capnhat($ma){
            $data = $this->LoaisanphamModel->layDanhmuc($ma);
            $this->view('backend/pages/quanly/capnhatloaisanpham', $data);
        }

        public function sua()
        {
            $data['ten'] = $_POST['ten'];
            $data['ghichu'] = $_POST['ghichu'];
            $data['link'] = $_POST['link'];
            $data['ma'] = $_POST['ma'];
            $this->LoaisanphamModel->suaDanhmuc($data);
            redirect('loaisanpham/index');
        }
        public function xoa($ma)
        {
            $this->LoaisanphamModel->xoaDanhmuc($ma);
            redirect('loaisanpham/index');
        }
     }
?>