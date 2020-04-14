<?php
class Admin extends Controller
{

    public function __construct()
    {
        $this->usermodel = $this->model('UserModel');
    }

    public function index()
    {
        $this->view('backend/pages/index');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data['ten'] = $_POST['ten'];
            $user = $this->usermodel->layNguoiDung($data['ten']);
            if ($user) {
                if ($user->matkhau == $_POST['matkhau']) {
                    flash('dang_nhap_thanh_cong', 'Đăng nhập thành công');
                    $_SESSION['tentaikhoan'] = $data['ten'];
                    $_SESSION['tenhienthi'] = $user->tenhienthi;
                    $_SESSION['mataikhoan'] =  $user->matkhau;
                    $_SESSION['avatar'] =  $user->anh;
                    redirect('admin');
                } else {
                    flash('dang_ky_thanh_cong', 'Sai tên đăng nhập, mật khẩu', 'alert alert-danger');
                }
            } else {

                flash('dang_ky_thanh_cong', 'Sai tên đăng nhập, mật khẩu', 'alert alert-danger');
            }
        } else {
            $data['ten'] = '';
        }
        $this->view('backend/pages/login', $data);
    }
    public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'ten' => $_POST['ten'],
                'email' => $_POST['email'],
                'matkhau' => $_POST['matkhau'],
                'nhaplaimatkhau' => $_POST['nhaplai'],
                'tenhienthi' => $_POST['tenhienthi'],
                'loiten' => '',
                'loiemail' => '',
                'loimatkhau' => '',
                'loinhaplai' => '',
            ];
            if ($data['matkhau'] != $data['nhaplaimatkhau']) {
                $data['loinhaplai'] = 'Mật khẩu nhập lại không khớp';
            }
            if (strlen($data['matkhau']) < 6) {
                $data['loimatkhau'] = 'Mật khẩu phải lớn hơn 6 kí tự';
            }
            if ($this->usermodel->kiemTraTenNguoiDung($data['ten'])) {
                $data['loiten'] = 'Tên người dùng đã tồn tại';
            }
            if (!(empty($data['loiten']) || empty($data['loiemail']) || empty($data['loimatkhau']) || empty($data['loinhaplai']))) {
                $this->view('backend/pages/register', $data);
            } else {
                if (!$this->usermodel->themTaiKhoan($data)) {
                    flash('loi_dang_ky', 'Đăng ký thất bại', 'alert alert-danger');
                    $this->view('backend/pages/register', $data);
                } else {
                    flash('dang_ky_thanh_cong', 'Đăng ký thành công. Đăng nhập ngay');
                    redirect('admin/login');
                }
            }
        } else {
            $data = [
                'ten' => '',
                'email' => '',
                'matkhau' => '',
                'tenhienthi' => '',
                'nhaplaimatkhau' => '',
                'loiten' => '',
                'loiemail' => '',
                'loimatkhau' => '',
                'loinhaplai' => '',
            ];
        }
        $this->view('backend/pages/register', $data);
    }

    public function logout()
    {
        session_destroy();
        redirect('admin/login');
    }
}
