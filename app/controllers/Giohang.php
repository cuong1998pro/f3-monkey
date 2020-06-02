<?php
class Giohang extends Controller
{

    public function __construct()
    {
        $this->GiohangModel = $this->model('GiohangModel');
    }

    public function index()
    {
        $data['giohang'] = $this->GiohangModel->layGioHang();
        $this->view('frontend/cart', $data);
    }

    public function them(){
        $data['masanpham'] = $_POST['masanpham'];
        $data['soluong'] = $_POST['soluong'];
        $data['ten'] = $_POST['ten'];
        $data['anh'] = $_POST['anh'];
        $data['dongia'] = str_replace(",", "", $_POST['dongia']);
        $data['dongia'] = str_replace("đ", "", $data['dongia']);
        $data['dongia'] = intval($data['dongia']);
        $this->GiohangModel->them($data);
        redirect("giohang");
    }

    
    
    public function tangSoLuong($masanpham){
        $this->GiohangModel->tangSoLuong($masanpham);
        redirect("giohang");    
    }
    public function giamSoLuong($masanpham)
    {
        $this->GiohangModel->giamSoLuong($masanpham);
        redirect("giohang");    
    }

    public function xoatoanbo(){
        $this->GiohangModel->xoatoanbo();
        redirect("giohang");
    }
}
