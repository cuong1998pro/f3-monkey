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
function uploadImage($tenThuMuc)
{
  $Image = $_FILES["Image"]["name"];
  $Target = URLROOT . '/backend/images/' . $tenThuMuc . '/' . basename($Image);
  return move_uploaded_file($_FILES["Image"]["tmp_name"], $Target);
}
function getCurrentTime()
{
  date_default_timezone_set("Asia/Ho_Chi_Minh");
  $CurrentTime = time();
  return strftime("%d/%m/%Y %H:%M", $CurrentTime);
}
