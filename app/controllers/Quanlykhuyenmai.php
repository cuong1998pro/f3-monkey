<?php 
class Quanlykhuyenmai extends Controller{
    public function __construct()
    {
        $this->KhuyenmaiModel = $this->model('KhuyenmaiModel');
    }

    public function index()
    {
        $data =  $this->AnhsanphamModel->layDanhSach();
        // var_dump($data);die();
        $this->view('backend/pages/quanly/Anhsanpham',  $data);
    }
}