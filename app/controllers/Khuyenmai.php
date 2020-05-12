<?php 
class Khuyenmai extends Controller{
    public function __construct()
    {
        $this->KhuyenmaiModel = $this->model('KhuyenmaiModel');
    }

    public function index($masanpham)
    {
        $data =  $this->KhuyenmaiModel->layDanhSach($masanpham);
        $this->view('backend/pages/quanly/khuyenmai',  $data);
    }

    public function them($masanpham)
    {
        $data['khuyenmai'] = $_POST['khuyenmai'];
        $data['ngaybatdau'] = $_POST['ngaybatdau'];
        $data['ngayketthuc'] = $_POST['ngayketthuc'];
        redirect('khuyenmai/index/'.$masanpham);
    }

    public function capnhat($maanh)
    {
        $data =  $this->KhuyenmaiModel->layHinhAnh($maanh);
        $this->view('backend/pages/quanly/capnhatkhuyenmai',  $data);
    }

    public function sua($masanpham)
    {
        $data['anh'] = $_POST['tenanhcu'];
        uploadImage($data['anh'], 'sanpham/');
        redirect('khuyenmai/index'.$masanpham);
    }

    public function xoa($masanpham, $ma)
    {
        $this->KhuyenmaiModel->xoakhuyenmai($ma);
        redirect('khuyenmai/index'.$masanpham);
    }
    
}