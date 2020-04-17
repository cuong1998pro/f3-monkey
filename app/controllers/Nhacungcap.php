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
        // var_dump($data);die();
        $this->view('backend/pages/quanly/nhacungcap',  $data);
    }

    public function them()
    {

        $data['ten'] = $_POST['ten'];
        $data['sodienthoai'] = $_POST['sodienthoai'];
        $data['diachi'] = $_POST['diachi'];
        $data['email'] = $_POST['email'];
        $data['nguoilienhe'] = $_POST['nguoilienhe'];
        $this->nhacungcapmodel->themNCC($data);
        redirect('nhacungcap/index');
    }
}
