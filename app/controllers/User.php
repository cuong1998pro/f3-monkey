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
        $data['matkhau'] = $_POST['matkhau'];
        $data['maloaitaikhoan'] = $_POST['maloaitaikhoan'];
        $this->usermodel->them($data);
        redirect('user/index');
    }

    public function sua()
    {
        $data['ten'] = $_POST['ten'];
        $data['tenhienthi'] = $_POST['tenhienthi'];
        $data['matkhau'] = $_POST['matkhau'];
        $data['maloaitaikhoan'] = $_POST['maloaitaikhoan'];
        $this->usermodel->them($data);
        redirect('user/index');
    }
    public function capnhat($ma)
    {
        $data = $this->usermodel->layNguoiDung($ma);
        var_dump($data);
        die();
        $this->view('backend/pages/quanly/capnhatncc',  $data);
    }

    public function xoa($ma)
    {
        $this->nhacungcapmodel->xoaNCC($ma);
        redirect('nhacungcap/index');
    }

}