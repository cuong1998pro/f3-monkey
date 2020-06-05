<?php
class Anhsanpham extends Controller
{
    public function __construct()
    {
        $this->AnhsanphamModel = $this->model('AnhsanphamModel');
    }

    public function index($masanpham = 1)
    {

        $data['danhsachanh'] =  $this->AnhsanphamModel->layDanhSach($masanpham);
        $data['masanpham'] = $masanpham;
        $this->view('backend/pages/quanly/anhsanpham',  $data);
    }
    public function them()
    {
        $data['masanpham'] = $_POST['masanpham'];
        $data['anh'] = $data['masanpham'] . '-' . $this->AnhsanphamModel->layMaAnhMoi($data['masanpham']) . '.jpg';
        uploadImage($data['anh'], 'sanpham/');
        $this->AnhsanphamModel->themAnhsanpham($data);
        redirect('anhsanpham/index/' . $data['masanpham']);
    }

    public function capnhat($maanh)
    {
        $data =  $this->AnhsanphamModel->layHinhAnh($maanh);
        $this->view('backend/pages/quanly/capnhatanhsanpham',  $data);
    }

    public function sua()
    {
        $data['masanpham'] = $_POST['ma'];
        $data['anh'] = $_POST['tenanhcu'];
        uploadImage($data['anh'], 'sanpham/');
        redirect('anhsanpham/index/'.$data['masanpham']);
    }

    public function xoa($ma)
    {
        $this->AnhsanphamModel->xoaAnhsanpham($ma);
        redirect('anhsanpham/index');
    }
}
