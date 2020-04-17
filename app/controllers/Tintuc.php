<?php
    class Tintuc extends Controller{
        public function __construct()
        {
            $this->TintucModel = $this->model('TintucModel');
        }
    
        public function index()
        {
            $data =  $this->TintucModel->layDanhSach();
            // var_dump($data);die();
            $this->view('backend/pages/quanly/Tintuc',  $data);
        }
        public function them()
        {
            $data['tieude'] = $_POST['tieude'];
            $data['anh'] = $_POST['anh'];
            $data['tomtat'] = $_POST['tomtat'];
            $data['noidung'] = $_POST['noidung'];
            $this->TintucModel->themTintuc($data);
            redirect('nhacungcap/index');
        }

        public function sua()
        {
            $data['tieude'] = $_POST['tieude'];
            $data['anh'] = $_POST['anh'];
            $data['tomtat'] = $_POST['tomtat'];
            $data['noidung'] = $_POST['noidung'];
            $this->TintucModel->suaTintuc($data);
            redirect('nhacungcap/index');
        }

        public function xoa($ma)
        {
            $this->TintucModel->xoaTintuc($ma);
            redirect('nhacungcap/index');
        }
     }
?>