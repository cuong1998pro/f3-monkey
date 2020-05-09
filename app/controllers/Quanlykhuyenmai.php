<?php 
class Quanlykhuyenmai extends Controller{
    public function __construct()
    {
        $this->KhuyenmaiModel = $this->model('KhuyenmaiModel');
    }

    public function index()
    {
        $data =  $this->AnhsanphamModel->layDanhSach();
        $this->view('backend/pages/quanly/Anhsanpham',  $data);
    }
}