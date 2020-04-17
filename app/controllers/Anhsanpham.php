<?php
    class Anhsanpham extends Controller{
        public function __construct()
        {
            $this->AnhsanphamModel = $this->model('AnhsanphamModel');
        }
    
        public function index()
        {
            $data =  $this->AnhsanphamModel->layDanhSach();
            // var_dump($data);die();
            $this->view('backend/pages/quanly/Anhsanpham',  $data);
        }
        public function them()
        {
            $data['anh'] = $_POST['anh'];
            $data['masanpham'] = $_POST['masanpham'];
            $this->AnhsanphamModel->theAnhsanpham($data);
            redirect('nhacungcap/index');
        }

        public function sua()
        {
            $data['anh'] = $_POST['anh'];
            $data['masanpham'] = $_POST['masanpham'];
            $this->AnhsanphamModel->suaAnhsanpham($data);
            redirect('nhacungcap/index');
        }

        public function xoa($ma)
        {
            $this->nhacungcapmodel->xoaAnhsanpham($ma);
            redirect('nhacungcap/index');
        }
     }
?>