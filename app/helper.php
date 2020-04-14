<?php
  // Simple page redirect
  function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
  }
  function checklogin(){
    if( empty($_SESSION['mataikhoan']) || empty($_SESSION['tentaikhoan'])) {
      redirect('admin/login');
    }
  }