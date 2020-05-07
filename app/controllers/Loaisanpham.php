<!-- cũng php class xong extedn  -->
<?php
    class Loaisanpham extends Controller{
        public function __construct()
        {
            $this->LoaisanphamModel = $this->model('LoaisanphamModel');
        }
    
        public function index()
        {
            
            $data =  $this->LoaisanphamModel->layDanhSach();
            $this->view('backend/pages/quanly/Loaisanpham',  $data);
        }
        public function them()
        {
            $data['ten'] = $_POST['ten'];
            $data['anh'] = $_FILES['anh']['name'];
            $data['link'] = $_POST['link'];
            if(!uploadImage()){
                die('Có lỗi sảy ra khi thêm ảnh.');
            }

            $this->LoaisanphamModel->themDanhmuc($data);
            redirect('loaisanpham/index');
        }
        public function capnhat($ma){
            $data = $this->LoaisanphamModel->layDanhmuc($ma);
            $this->view('backend/pages/quanly/capnhatloaisanpham', $data);
        }

        public function sua()
        {
            $data['ten'] = $_POST['ten'];
            $data['anh'] = $_POST['anh'];
            $data['link'] = $_POST['link'];
            $this->LoaisanphamModel->themLoaisanpham($data);
            redirect('loaisanpham/index');
        }
        public function xoa($ma)
        {
            $this->LoaisanphamModel->xoaDanhmuc($ma);
            redirect('loaisanpham/index');
        }
     }
?>