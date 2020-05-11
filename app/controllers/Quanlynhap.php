<?php 

class Quanlynhap extends Controller{

    public function __construct()
    {
        $this->PhieunhapModel = $this->model('PhieunhapModel');
        $this->NhacungcapModel = $this->model('NhacungcapModel');
        $this->SanphamModel = $this->model('SanphamModel');
    }

    public function index()
    {
        $data['nhacungcap'] = $this->NhacungcapModel->layDanhSach2();
        $data['phieunhap'] =  $this->PhieunhapModel->layDanhSach();
        $data['sanpham'] =  $this->SanphamModel->layDanhSach();

        $this->view('backend/pages/quanly/phieunhap',  $data);
    }

    public function them()
    {
        $data['manhacungcap'] = $_POST['manhacungcap'];
        $data['lydonhap'] = $_POST['lydonhap'];
        $id =  $this->PhieunhapModel->themPhieuNhapLayId($data);
        echo $id;
    }
    
    public function sua(){
        $data['manhacungcap'] = $_POST['manhacungcap'];
        $data['lydonhap'] = $_POST['lydonhap'];
        $data['ma'] = $_POST['ma'];
        $this->PhieunhapModel->suaPhieuNhap($data);
        redirect('quanlynhap/index');
    }

    public function xoa($maphieunhap){
        $this->PhieunhapModel->xoaPhieuNhap($maphieunhap);
        redirect('quanlynhap/index');
    }

    public function capnhat($maphieunhap){
        $data['nhacungcap'] = $this->NhacungcapModel->layDanhSach2();
        $data['phieunhap'] =  $this->PhieunhapModel->layPhieuNhap($maphieunhap);        
        $this->view('backend/pages/quanly/capnhatphieunhap',  $data);

    }
}