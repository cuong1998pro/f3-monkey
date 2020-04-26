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
            $data['tendangnhap'] = $_POST['tendangnhap'];
            $data['matkhau'] = $_POST['matkhau'];
            $user = $this->usermodel->layNguoiDung($data['tendangnhap']);

            if ($user) {
                if (password_verify($data['matkhau'], $user->matkhau)) {
                    flash('dang_nhap_thanh_cong', 'Đăng nhập thành công');
                    $_SESSION['tentaikhoan'] = $data['tendangnhap'];
                    $_SESSION['tenhienthi'] = $user->tenhienthi;
                    $_SESSION['mataikhoan'] =  $user->ma;
                    $_SESSION['avatar'] =  $user->anh;
                    redirect('admin');
                } else {
                    $data['loimatkhau'] = "Sai mật khẩu.";
                    $data['loitendangnhap'] = '';
                }
            } else {
                $data['loitendangnhap'] = "Tên đăng nhập không tồn tại.";
                $data['loimatkhau'] = '';
            }
            $this->view('backend/pages/login', $data);
        } else {
            $data['tendangnhap'] = '';
            $data['matkhau'] = '';
            $data['loitendangnhap'] = '';
            $data['loimatkhau'] = '';
            $this->view('backend/pages/login', $data);
        }
    }
    public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'ten' => $_POST['ten'],
                'matkhau' => $_POST['matkhau'],
                'nhaplaimatkhau' => $_POST['nhaplai'],
                'tenhienthi' => $_POST['tenhienthi'],
                'loiten' => '',
                'loitenhienthi' => '',
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
            if ((empty($data['loiten']) && empty($data['loiemail']) && empty($data['loimatkhau']) && empty($data['loinhaplai']))) 
            {
                $data['matkhau'] = password_hash($data['matkhau'], PASSWORD_DEFAULT);
                if (!$this->usermodel->themTaiKhoan($data)) {
                    $this->view('backend/pages/register', $data);
                } else {
                    flash('dang_ky_thanh_cong', 'Đăng ký thành công. Đăng nhập ngay');
                    redirect('admin/login');
                }
            } else {
                $this->view('backend/pages/register', $data);
            }
        } else {
            $data = [
                'ten' => '',
                'email' => '',
                'matkhau' => '',
                'tenhienthi' => '',
                'nhaplaimatkhau' => '',
                'loiten' => '',
                'loitenhienthi' => '',
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
