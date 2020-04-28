
<?php
    class SanPham extends Controller{
        public function __construct()
        {
            $this->SanPhamModel = $this->model('SanphamModel');
        }
    
        public function index()
        {
            $data =  $this->SanPhamModel->layDanhSach();
            // var_dump($data);die();
            $this->view('backend/pages/quanly/Sanpham',  $data);
        }
        
        public function them()
        {
            $data['ten'] = $_POST['ten'];
            $data['anh'] = $_POST['anh'];
            $data['madanhmuc'] = $_POST['madanhmuc'];
            $data['mota'] = $_POST['mota'];
            $data['mausac'] = $_POST['mausac'];
            $data['luachon'] = $_POST['luachon'];
            $data['gianienyet'] = $_POST['gianienyet'];
            $data['noidung'] = $_POST['noidung'];
            $data['tinhtrang'] = $_POST['tinhtrang'];
            $data['khuyenmai'] = $_POST['khuyenmai'];
            $data['thongtinchitiet'] = $_POST['thongtinchitiet'];
            $data['thongsokythuat'] = $_POST['thongsokythuat'];
            $this->TintucModel->themSanPham($data);
            redirect('sanpham/index');
        }

        public function sua()
        {
            $data['ten'] = $_POST['ten'];
            $data['anh'] = $_POST['anh'];
            $data['madanhmuc'] = $_POST['madanhmuc'];
            $data['mota'] = $_POST['mota'];
            $data['mausac'] = $_POST['mausac'];
            $data['luachon'] = $_POST['luachon'];
            $data['gianienyet'] = $_POST['gianienyet'];
            $data['noidung'] = $_POST['noidung'];
            $data['tinhtrang'] = $_POST['tinhtrang'];
            $data['khuyenmai'] = $_POST['khuyenmai'];
            $data['thongtinchitiet'] = $_POST['thongtinchitiet'];
            $data['thongsokythuat'] = $_POST['thongsokythuat'];
            $this->TintucModel->suaSanPham($data);
            redirect('sanpham/index');
        }

        public function xoa($ma)
        {
            $this->TintucModel->xoaSanpham($ma);
            redirect('sanpham/index');
        }
     }
?>