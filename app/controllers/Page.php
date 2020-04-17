<?php
class Page extends Controller{
    
    public function index(){
        $this->view('frontend/index');
    }
    
    public function sanpham($id = 1){
        $this->view('frontend/product_detail');
    }
}