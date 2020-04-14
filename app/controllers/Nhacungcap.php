<?php
class Nhacungcap extends Controller
{

    public function __construct()
    {
        // $this->usermodel = $this->model('NhacungcapModel');
    }

    public function danhsach()
    {
        $this->view('backend/pages/nhacungcap/danhsach');
    }

}
