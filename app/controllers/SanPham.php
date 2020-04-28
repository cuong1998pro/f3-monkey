
<?php
    class SanPham extends Controller{
        public function __construct()
        {
            $this->SanPhamModel = $this->model('SanphamModel');
            $this->DanhmucModel = $this->model('LoaisanphamModel');

        }
        public function index()
        {
            $sanpham =  $this->SanPhamModel->layDanhSach();
            $danhmuc = $this->DanhmucModel->layDanhSach();
            $this->view('backend/pages/quanly/danhsachsanpham',  [ 'sanpham'=>$sanpham, 'danhmuc'=>$danhmuc]);
        }
        //may cai nay de  no lam di chi cho t cach ap dung vaof form 
        //ong sua 1 cai form hoan chinh di. de t fix cai bug nay cho cai form no hien len thi moi xem duoc 
        // lam may ong di r chi cho t cach sua
        //t ngoi viet do cho 1 its

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