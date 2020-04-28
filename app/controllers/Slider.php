<?php
class Slider extends Controller
{
    public function __construct()
    {
        $this->SliderModel = $this->model('SliderModel');
    }

    public function index()
    {
        $data =  $this->SliderModel->layDanhSach();
        $this->view('backend/pages/quanly/slider',  $data);
    }


    public function capnhat($ma)
    {
        $data =  $this->SliderModel->laySlider($ma);
        $this->view('backend/pages/quanly/capnhatslider',  $data);
    }
    public function sua($ma)
    {
        $data['ma'] = $ma;
        if (!empty($_FILES['anh']['name'])) {
            $data['anh'] = $_FILES['anh']['name'];
            $data['link'] = $_POST['link'];
            uploadImage();
            $this->SliderModel->suaSlider($data);
            redirect('slider/index');
        } else {
            $data['link'] = $_POST['link'];
            $this->SliderModel->suaDuongDan($data);
            redirect('slider/index');
        }
    }
}
