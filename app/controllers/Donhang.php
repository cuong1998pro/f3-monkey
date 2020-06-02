<?php

class Donhang extends Controller
{
    public function __construct()
    {
        $this->DonhangModel = $this->model('DonhangModel');
    }

    public function index()
    {
        $data['dsdonhang'] =  $this->DonhangModel->layDanhSach();
        $this->view('backend/pages/quanly/donhang',  $data);
    }

    public function them(){
        $data['hinhthucthanhtoan'] = $_POST['hinhthucthanhtoan'] ;
        $data['sotien'] = $_POST['sotien'];
        $data['hoten'] = $_POST['hoten'];
        $data['diachi'] = $_POST['diachi'];
        $data['sodienthoai'] = $_POST['sodienthoai'];
        $data['ghichu'] = $_POST['ghichu'];
        $this->DonhangModel->them($data);
        $this->view('frontend/camonmuahang');
    }

    public function xac_nhan($madonhang){
        $this->DonhangModel->xacnhan($madonhang);   
        redirect('donhang/index'); 
    }

    public function giao_hang($madonhang){
        $this->DonhangModel->giaohang($madonhang);   
        redirect('donhang/index'); 

    }

    public function thanh_toan($madonhang)
    {
        $this->DonhangModel->thanhtoan($madonhang);   
        redirect('donhang/index'); 

    }

    public function hoan_thanh($madonhang)
    {
        $this->DonhangModel->hoanthanh($madonhang);    
        redirect('donhang/index');
    }
    
    public function xoa($madonhang){
        $this->DonhangModel->xoa($madonhang);
        redirect('donhang/index');
    }
    
}
