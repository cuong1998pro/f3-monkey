<?php 
class Khuyenmai extends Controller{
    public function __construct()
    {
        $this->KhuyenmaiModel = $this->model('KhuyenmaiModel');
    }

    public function index($masanpham)
    {
        $data['khuyenmai'] =  $this->KhuyenmaiModel->layDanhSach($masanpham);
        $data['masanpham'] = $masanpham;
        $this->view('backend/pages/quanly/khuyenmai',  $data);
    }

    public function them($masanpham)
    {
        $data['khuyenmai'] = $_POST['khuyenmai'];
        $data['ngaybatdau'] = $_POST['ngaybatdau'];
        $data['masanpham'] = $masanpham;
        $data =  $this->KhuyenmaiModel->themKhuyenMai($data);
        redirect('khuyenmai/index/'.$masanpham);
    }

    public function capnhat($masanpham)
    {
        $data['khuyenmai'] =  $this->KhuyenmaiModel->layKhuyenMai($masanpham);
        $data['masanpham'] = $data['khuyenmai']->masanpham;
        $this->view('backend/pages/quanly/capnhatkhuyenmai',  $data);
    }

    public function sua($ma)
    {
        $data['khuyenmai'] = $_POST['khuyenmai'];
        $data['ngaybatdau'] = $_POST['ngaybatdau'];
        $data['masanpham'] = $_POST['masanpham'];;
        $masp = $data['masanpham'];
        $data['ma'] = $ma;
        $data =  $this->KhuyenmaiModel->suaKhuyenMai($data);
        redirect('khuyenmai/index/' . $masp);
    }

    public function xoa($masanpham, $ma)
    {
        $this->KhuyenmaiModel->xoakhuyenmai($ma);
        redirect('khuyenmai/index/'.$masanpham);
    }
    
}