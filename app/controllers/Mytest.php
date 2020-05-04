<?php
class Mytest extends Controller
{
    public function __construct()
    {
        $this->SanPhamModel = $this->model('SanphamModel');
        $this->DanhmucModel = $this->model('LoaisanphamModel');
    }

    public function index()
    {
        $data = $this->SanPhamModel->laySanPham(1);
        $this->view('backend/pages/test', $data);
    }


    public function test()
    {
        var_dump($_POST['diachi']);
    }

    public function ham_2(){
        echo 'ham2';
    }

   
}
