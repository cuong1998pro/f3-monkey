<?php 

class Quanlynhap extends Controller{

    public function __construct()
    {
        $this->phieu = $this->model('AnhsanphamModel');
    }

    public function index()
    {
        $data =  $this->AnhsanphamModel->layDanhSach();
        // var_dump($data);die();
        $this->view('backend/pages/quanly/Anhsanpham',  $data);
    }
}