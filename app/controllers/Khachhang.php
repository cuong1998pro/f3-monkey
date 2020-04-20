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
        $data['matkhau'] = $_POST['matkhau'];
        $this->nhacungcapmodel->themKhachhang($data);
        redirect('nhacungcap/index');
    }

    public function sua()
    {
        $data['tendangnhap'] = $_POST['tendangnhap'];
        $data['hoten'] = $_POST['hoten'];
        $data['diachi'] = $_POST['diachi'];
        $data['sodienthoai'] = $_POST['sodienthoai'];
        $data['matkhau'] = $_POST['matkhau'];
        $this->nhacungcapmodel->suaKhachhang($data);
        redirect('nhacungcap/index');
    }

    public function xoa($ma)
    {
        $this->nhacungcapmodel->xoaKhachhang($ma);
        redirect('nhacungcap/index');
    }
}
