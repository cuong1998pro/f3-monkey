<?php
    class Cuahang extends Controller{
        public function __construct()
        {
            $this->CuahangModel = $this->model('CuahangModel');
        }
    
        public function index()
        {
            $data =  $this->CuahangModel->layDanhSach();
            // var_dump($data);die();
            $this->view('backend/pages/quanly/Cuahang',  $data);
        }
        public function them()
    {
        $data['ten'] = $_POST['ten'];
        $data['diachi'] = $_POST['diachi'];
        $data['sodienthoai'] = $_POST['sodienthoai'];
        $data['email'] = $_POST['email'];
        $this->CuahangModel->themCuahang($data);
        redirect('nhacungcap/index');
    }

    public function sua()
    {
        $data['ten'] = $_POST['ten'];
        $data['diachi'] = $_POST['diachi'];
        $data['sodienthoai'] = $_POST['sodienthoai'];
        $data['email'] = $_POST['email'];
        $this->CuahangModel->themCuahang($data);
        redirect('nhacungcap/index');
    }

    public function xoa()
    {
        $data['ma'] = $_POST['ma'];
        $this->CuahangModel->xoaCuahang();
        redirect('nhacungcap/index');
    }
    }
?>