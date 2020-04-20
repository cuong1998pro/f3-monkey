<?php
class Thongtinsanpham extends Controller
{

    private $ThongtinsanphamModel;
    public function __construct()
    {
        $this->ThongtinsanphamModel = $this->model('ThongtinsanphamModel');
    }

    public function index()
    {
        $data =  $this->ThongtinsanphamModel->layDanhSach();
        // var_dump($data);die();
        $this->view('backend/pages/quanly/Thongtinsanpham',  $data);
    }
    
    public function them()
    {

        $data['ten'] = $_POST['ten'];
        $data['giatri'] = $_POST['giatri'];
        $data['masanpham'] = $_POST['masanpham'];
        $this->nhacungcapmodel->themThongtinsanpham($data);
        redirect('nhacungcap/index');
    }

    public function sua()
    {
        $data['ten'] = $_POST['ten'];
        $data['giatri'] = $_POST['giatri'];
        $data['masanpham'] = $_POST['masanpham'];
        $this->nhacungcapmodel->suaThongtinsanpham($data);
        redirect('nhacungcap/index');
    }

    public function xoa($ma)
    {
        $this->nhacungcapmodel->xoaThongtinsanpham($ma);
        redirect('nhacungcap/index');
    }
}
