<!-- cũng php class xong extedn  -->
<?php
    class Loaisanpham extends Controller{
        public function __construct()
        {
            $this->LoaisanphamModel = $this->model('LoaisanphamModel');
        }
    
        public function index()
        {
            // chỉnh hàm index để nó lấy ra danh sách  rồi gửi dl vào cái view ban nãy tạo
            //tạo cái model ở đâu và kiểu j
            $data =  $this->LoaisanphamModel->layDanhSach();
            // lấy view ra đổ dl vào này
            //ok
            $this->view('backend/pages/quanly/Loaisanpham',  $data);
        }
        public function them()
        {
            // o day hang dl de xu ly roi them
            $data['ten'] = $_POST['ten'];
            //anh no se lay ten cua cai anh chuan bi them gan vao bien anh de luu vao csdl
            $data['anh'] = $_FILES['anh']['name'];
            $data['link'] = $_POST['link'];
            // upload anh
            if(!uploadImage()){
                die('Có lỗi sảy ra khi thêm ảnh.');
            }
            // them vaof csdl
            $this->LoaisanphamModel->themDanhmuc($data);
            // quay lai trang danh sach
            redirect('loaisanpham/index');
        }
        // chưa có hàm cập nhật
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