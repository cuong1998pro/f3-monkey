<?php
// Simple page redirect
function redirect($page)
{
  header('location: ' . URLROOT . '/' . $page);
}
function checklogin()
{
  if (empty($_SESSION['mataikhoan']) || empty($_SESSION['tentaikhoan'])) {
    redirect('admin/login');
  }
}
function uploadImage($tenanh="", $tenthumuc="")
{
  $Image = $_FILES["anh"]["name"];
  if($tenanh==""){
    $Target =   'backend/images/'. basename($Image);
  }else{
    $Target =   'backend/images/'.$tenthumuc.'/' . $tenanh;
  }
  if( !move_uploaded_file($_FILES["anh"]["tmp_name"], $Target)){
    die('loi tai anh!');
  };
}
function getCurrentTime()
{
  date_default_timezone_set("Asia/Ho_Chi_Minh");
  return date("Y/m/d H:M");
}
