<?php
class Khachhang extends Controller
{

    private $KhachhangModel;
    public function __construct()
    {
        $this->KhachhangModel = $this->model('KhachhangModel');
    }

    public function index()
    {
        $data =  $this->KhachhangModel->layDanhSach();
        // var_dump($data);die();
        $this->view('backend/pages/quanly/Khachhang',  $data);
    }
    
    public function them()
    {

        $data['tendangnhap'] = $_POST['tendangnhap'];
        $data['hoten'] = $_POST['hoten'];
        $data['diachi'] = $_POST['diachi'];
        $data['sodienthoai'] = $_POST['sodienthoai'];
        $data['matkhau'] = password_hash($data['matkhau'], PASSWORD_DEFAULT);
        $this->KhachhangModel->themKhachhang($data);
        redirect('Khachhang/index');
    }

    public function sua()
    {
        $data['tendangnhap'] = $_POST['tendangnhap'];
        $data['hoten'] = $_POST['hoten'];
        $data['diachi'] = $_POST['diachi'];
        $data['sodienthoai'] = $_POST['sodienthoai'];
        $data['matkhau'] = $_POST['matkhau'];
        $this->KhachhangModel->suaKhachhang($data);
        redirect('Khachhang/index');
    }

    public function xoa($ma)
    {
        $this->KhachhangModel->xoaKhachhang($ma);
        redirect('Khachhang/index');
    }
}
