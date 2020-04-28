<?php
class User extends Controller
{

    public function __construct()
    {
        $this->usermodel = $this->model('UserModel');
    }

    public function index()
    {
        $data['taikhoan'] = $this->usermodel->layDanhSachTaiKhoan();
        $data['loaitaikhoan'] = $this->usermodel->layDanhSachLoaiTaiKhoan();
        $this->view('backend/pages/quanly/danhsachnguoidung', $data);
    }
    public function them()
    {
        $data['ten'] = $_POST['ten'];
        $data['tenhienthi'] = $_POST['tenhienthi'];
        $data['matkhau'] = password_hash($_POST['matkhau'], PASSWORD_DEFAULT);
        $data['maloaitaikhoan'] = $_POST['maloaitaikhoan'];
        $this->usermodel->them($data);
        redirect('user/index');
    }

    public function sua()
    {
        $data['ten'] = $_POST['ten'];
        $data['ma'] = $_POST['ma'];
        $data['tenhienthi'] = $_POST['tenhienthi'];
        $data['matkhau'] = password_hash($_POST['matkhau'], PASSWORD_DEFAULT);
        $data['maloaitaikhoan'] = $_POST['maloaitaikhoan'];
        $this->usermodel->sua($data);
        redirect('user/index');
    }
    public function capnhat($ma)
    {
        $data['taikhoan'] = $this->usermodel->layNguoiDung($ma);
        $data['loaitaikhoan'] = $this->usermodel->layDanhSachLoaiTaiKhoan();
        $this->view('backend/pages/quanly/capnhattaikhoan',  $data);
    }

    public function xoa($ma)
    {
        $this->usermodel->xoa($ma);
        redirect('user/index');
    }

}