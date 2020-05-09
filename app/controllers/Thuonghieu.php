<?php
    class Thuonghieu extends Controller{
        public function __construct()
        {
            $this->ThuonghieuModel = $this->model('ThuonghieuModel');
            $this->LoaisanphamModel = $this->model('LoaisanphamModel');

        }
    
        public function index()
        {
            $data['thuonghieu'] =  $this->ThuonghieuModel->layDanhSach();
            $data['danhmuc'] =  $this->LoaisanphamModel->layDanhSach();
            $this->view('backend/pages/quanly/thuonghieu',  $data);
        }
        public function them()
        {
            $data['ten'] = $_POST['ten'];
            $data['ghichu'] = $_POST['ghichu'];
            $data['link'] = $_POST['link'];
            $data['madanhmuc'] = $_POST['madanhmuc'];
            $this->ThuonghieuModel->themThuonghieu($data);
            redirect('thuonghieu/index');
        }
        public function capnhat($ma){
            $data['thuonghieu'] =  $this->ThuonghieuModel->layThuongHieu($ma);
            $data['danhmuc'] =  $this->LoaisanphamModel->layDanhSach();            
            $this->view('backend/pages/quanly/capnhatthuonghieu', $data);
        }

        public function sua()
        {
            $data['ten'] = $_POST['ten'];
            $data['ghichu'] = $_POST['ghichu'];
            $data['link'] = $_POST['link'];
            $data['madanhmuc'] = $_POST['madanhmuc'];
            $data['ma'] = $_POST['ma'];
            $this->ThuonghieuModel->suaThuongHieu($data);
            redirect('thuonghieu/index');
        }
        public function xoa($ma)
        {
            $this->ThuonghieuModel->xoaThuongHieu($ma);
            redirect('thuonghieu/index');
        }
     }
