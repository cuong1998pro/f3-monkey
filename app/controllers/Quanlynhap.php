<?php 

class Quanlynhap extends Controller{

    public function __construct()
    {
        $this->PhieunhapModel = $this->model('PhieunhapModel');
        $this->NhacungcapModel = $this->model('NhacungcapModel');
        $this->SanphamModel = $this->model('SanphamModel');
        $this->ChitietphieunhapModel = $this->model('ChitietphieunhapModel');
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
        $this->PhieunhapModel->themPhieuNhapLayId($data);
        redirect('quanlynhap/index');

    }

    public function xem_chi_tiet($maphieunhap){
        $data['sanpham'] = $this->SanphamModel->layDanhSach();
        $data['phieunhap'] = $this->ChitietphieunhapModel->layDanhSach($maphieunhap);
        $data['maphieunhap'] = $maphieunhap;
        $this->view('backend/pages/quanly/chitietphieunhap', $data);
    }

    public function them_chi_tiet(){
        $data['masanpham'] = $_POST['masanpham'];
        $data['soluong'] = $_POST['soluong'];
        $data['dongia'] = $_POST['dongia'];
        $data['maphieunhap'] = $_POST['maphieunhap'];
        $this->ChitietphieunhapModel->them($data);
        redirect('quanlynhap/xem-chi-tiet/'.$data['maphieunhap']);
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

    public function xoachitiet($machitiet, $ma){
        $this->ChitietphieunhapModel->xoa($machitiet);
        redirect('quanlynhap/xem-chi-tiet/'. $ma);
    }

    public function capnhat($maphieunhap){
        $data['nhacungcap'] = $this->NhacungcapModel->layDanhSach2();
        $data['phieunhap'] =  $this->PhieunhapModel->layPhieuNhap($maphieunhap);        
        $this->view('backend/pages/quanly/capnhatphieunhap',  $data);
    }
}