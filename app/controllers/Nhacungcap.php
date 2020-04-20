<?php
class Nhacungcap extends Controller
{

    private $nhacungcapmodel;
    public function __construct()
    {
        $this->nhacungcapmodel = $this->model('NhacungcapModel');
    }

    public function index()
    {
        $data =  $this->nhacungcapmodel->layDanhSach();
        $this->view('backend/pages/quanly/nhacungcap',  $data);
    }

    public function them()
    {

        $data['ten'] = $_POST['ten'];
        $data['diachi'] = $_POST['diachi'];
        $data['sodienthoai'] = $_POST['sodienthoai'];
        $data['email'] = $_POST['email'];
        $data['nguoilienhe'] = $_POST['nguoilienhe'];
        $this->nhacungcapmodel->themNCC($data);
        redirect('nhacungcap/index');
    }

    public function sua()
    {
        $data['ma'] = $_POST['ma'];
        $data['ten'] = $_POST['ten'];
        $data['sodienthoai'] = $_POST['sodienthoai'];
        $data['diachi'] = $_POST['diachi'];
        $data['email'] = $_POST['email'];
        $data['nguoilienhe'] = $_POST['nguoilienhe'];
        $this->nhacungcapmodel->suaNCC($data);
        redirect('nhacungcap/index');
    }

    public function xoa($ma)
    {
        $this->nhacungcapmodel->xoaNCC($ma);
        redirect('nhacungcap/index');
    }
}
