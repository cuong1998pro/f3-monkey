<?php
class Luachon extends Controller
{

    private $LuachonModel;
    public function __construct()
    {
        $this->LuachonModel = $this->model('LuachonModel');
    }

    public function index()
    {
        $data =  $this->LuachonModel->layDanhSach();
        // var_dump($data);die();
        $this->view('backend/pages/quanly/Thongtinsanpham',  $data);
    }
    
    public function them()
    {

        $data['masanpham'] = $_POST['masanpham'];
        $data['chitiet'] = $_POST['chitiet'];
        $data['gianiemyet'] = $_POST['gianiemyet'];
        $this->nhacungcapmodel->themLuachon($data);
        redirect('nhacungcap/index');
    }

    public function sua()
    {
        $data['masanpham'] = $_POST['masanpham'];
        $data['chitiet'] = $_POST['chitiet'];
        $data['gianiemyet'] = $_POST['gianiemyet'];
        $this->nhacungcapmodel->suaLuachon($data);
        redirect('nhacungcap/index');
    }

    public function xoa($ma)
    {
        $this->nhacungcapmodel->xoaLuachon($ma);
        redirect('nhacungcap/index');
    }
}
