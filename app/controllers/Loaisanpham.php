<?php
    class Loaisanpham extends Controller{
        public function __construct()
        {
            $this->LoaisanphamModel = $this->model('LoaisanphamModel');
        }
    
        public function index()
        {
            $data =  $this->LoaisanphamModel->layDanhSach();
            // var_dump($data);die();
            $this->view('backend/pages/quanly/Loaisanpham',  $data);
        }
        public function them()
        {
            
            $data['ten'] = $_POST['ten'];
            $data['anh'] = $_FILES['anh']['name'];
            $data['link'] = $_POST['link'];
            if(uploadImage()){
                die('them anh thanh cong');
            }
            $this->LoaisanphamModel->themLoaisanpham($data);
            redirect('nhacungcap/index');
        }

        public function sua()
        {
            $data['ten'] = $_POST['ten'];
            $data['anh'] = $_POST['anh'];
            $data['link'] = $_POST['link'];
            $this->LoaisanphamModel->themLoaisanpham($data);
            redirect('nhacungcap/index');
        }

        public function xoa($ma)
        {
            $this->LoaisanphamModel->themLoaisanpham($ma);
            redirect('nhacungcap/index');
        }
     }
?>