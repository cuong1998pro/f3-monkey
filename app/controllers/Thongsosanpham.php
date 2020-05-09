<?php
class Thongsosanpham extends Controller
{

    public function __construct()
    {
        $this->ThongsosanphamModel = $this->model('ThongsosanphamModel');
    }

    public function index($masanpham)
    {
        $data =  $this->ThongsosanphamModel->layDanhSach($masanpham);
        $data['masanpham'] = $masanpham;
        $this->view('backend/pages/quanly/thongsosanpham',  $data);
    }
    
    public function them()
    {
        $data['ten'] = $_POST['ten'];
        $data['giatri'] = $_POST['giatri'];
        $data['masanpham'] = $_POST['masanpham'];
        $this->ThongsosanphamModel->themThongtinsanpham($data);
        redirect('thongsosanpham/index/'.$data['masanpham']);
    }

    public function capnhat($mathongso)
    {
        $data =  $this->ThongsosanphamModel->layThongSo($mathongso);
        $this->view('backend/pages/quanly/capnhatthongsosanpham',  $data);
    }

    public function sua()
    {
        $data['ten'] = $_POST['ten'];
        $data['giatri'] = $_POST['giatri'];
        $data['masanpham'] = $_POST['masanpham'];
        $data['ma'] = $_POST['ma'];
        $this->ThongsosanphamModel->suaThongtinsanpham($data);
        redirect('thongsosanpham/index/'.$data['masanpham']);
    }

    public function xoa($ma)
    {
        $thongso = $this->ThongsosanphamModel->layThongSo($ma);
        $this->ThongsosanphamModel->xoaThongtinsanpham($ma);
        redirect('thongsosanpham/index/'.$thongso->masanpham);
    
    }
}
