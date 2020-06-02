<?php
class GiohangModel{
    public function __construct()
    {
        if (!isset($_SESSION['giohang'])) {
            $_SESSION['giohang'] = array();
        }
    }
    
    public function layGioHang(){
        // var_dump( $_SESSION['giohang']);
        if( isset( $_SESSION['giohang']))
        return  $_SESSION['giohang'];
        return null;
    }

    public function xoatoanbo()
    {
        unset($_SESSION['giohang']);
    }

    public function them($data){
        $vt = $this->layViTri($data['masanpham']);
        if($vt!=-1){
            $_SESSION['giohang'][$vt]['soluong']++;
            $_SESSION['giohang'][$vt]['dongia']+=$data['dongia'];
        }else{
            array_push($_SESSION['giohang'], $data);
        }
    }

    public function tangSoLuong($masanpham){
        $vt = $this->layViTri($masanpham);
        if ($vt != -1) {
            $giasanpham =  $_SESSION['giohang'][$vt]['dongia']/ $_SESSION['giohang'][$vt]['soluong'];
            $_SESSION['giohang'][$vt]['soluong']++;
            $_SESSION['giohang'][$vt]['dongia'] += $giasanpham;
        }
    }

    public function giamSoLuong($masanpham)
    {
        $vt = $this->layViTri($masanpham);
        if ($vt != -1) {
            $giasanpham =  $_SESSION['giohang'][$vt]['dongia'] / $_SESSION['giohang'][$vt]['soluong'];
            $_SESSION['giohang'][$vt]['soluong']--;
            $_SESSION['giohang'][$vt]['dongia'] -= $giasanpham;
            if($_SESSION['giohang'][$vt]['soluong'] == 0) unset($_SESSION['giohang'][$vt]);
        }
    }

    public function layViTri($masanpham){
        foreach($_SESSION['giohang'] as $vt=>$item){
            if($item['masanpham'] == $masanpham) 
            return $vt; 
        }
        return -1;
    }
}

