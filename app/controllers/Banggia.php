<?php

class Banggia extends Controller
{

    public function __construct()
    {
        $this->BanggiaModel = $this->model('BanggiaModel');
    }

    public function index()
    {
        $data['banggia'] = $this->BanggiaModel->layDanhSach();
        $this->view('backend/pages/quanly/banggia',  $data);
    }

    public function sua()
    {
        $data['ma'] = $_POST['ma'];
        $data['masanpham'] = $_POST['masanpham'];
        $data['gia'] = $_POST['gia'];
        $data['giamgia'] = $_POST['giamgia'];
        $data['ngaybatdau'] = getCurrentTime();
        $this->BanggiaModel->suaBangGia($data);
        redirect('banggia/index');
    }

    public function xoa($mabanggia)
    {
        $this->BanggiaModel->xoaBangGia($mabanggia);
        redirect('banggia/index');
    }

    

    public function capnhat($mabanggia)
    {
        $data['banggia'] =  $this->BanggiaModel->layBangGia($mabanggia);
        $this->view('backend/pages/quanly/capnhatbanggia',  $data);
    }
}
