<?php
class Thanhtoan extends Controller
{

    private $ThanhtoanModel;
    public function __construct()
    {
        $this->ThanhtoanModel = $this->model('ThanhtoanModel');
    }

    public function index()
    {
        $data =  $this->ThanhtoanModel->layDanhSach();
        $this->view('backend/pages/quanly/thanhtoan',  $data);
    }

    public function them()
    {

        $data['hinhthucthanhtoan'] = $_POST['hinhthucthanhtoan'];
        $data['trangthai'] = $_POST['trangthai'];
        $data['ngaythanhtoan'] = $_POST['ngaythanhtoan'];
        $this->ThanhtoanModel->themThanhtoan($data);
        redirect('Thanhtoan/index');
    }

    public function sua()
    {
        $data['hinhthucthanhtoan'] = $_POST['hinhthucthanhtoan'];
        $data['trangthai'] = $_POST['trangthai'];
        $data['ngaythanhtoan'] = $_POST['ngaythanhtoan'];
        redirect('Thanhtoan/index');
        $this->ThanhtoanModel->suaThanhtoan($data);
        redirect('Thanhtoan/index');
    }
    public function capnhat($ma){
        $data = $this->ThanhtoanModel->layThanhtoan($ma);
        $this->view('backend/pages/quanly/capnhatthanhtoan',  $data);
    }

    public function xoa($ma)
    {
        $this->ThanhtoanModel->xoaThanhtoan($ma);
        redirect('thanhtoan/index');
    }
}
