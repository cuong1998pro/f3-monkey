<?php 
class UserModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function themTaiKhoan($data){
        $sql = "insert into user(ten,tenhienthi, matkhau) values(:ten,:tenhienthi, :matkhau)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':matkhau', $data['matkhau']);
        $this->db->bind(':tenhienthi', $data['tenhienthi']);
        return ($this->db->execute());
    }
    public function them($data)
    {
        $sql = "insert into user(ten,tenhienthi, matkhau, maloaitaikhoan) values(:ten,:tenhienthi, :matkhau, :maloaitaikhoan)";
        $this->db->query($sql);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':matkhau', $data['matkhau']);
        $this->db->bind(':tenhienthi', $data['tenhienthi']);
        $this->db->bind(':maloaitaikhoan', $data['maloaitaikhoan']);
        return ($this->db->execute());
    }

    public function sua($data)
    {
        $sql = "update user set tenhienthi = :tenhienthi, matkhau = :matkhau, maloaitaikhoan = :maloaitaikhoan where ma = :ma";
        $this->db->query($sql);
        $this->db->bind(':matkhau', $data['matkhau']);
        $this->db->bind(':tenhienthi', $data['tenhienthi']);
        $this->db->bind(':maloaitaikhoan', $data['maloaitaikhoan']);
        $this->db->bind(':ma', $data['ma']);
        return ($this->db->execute());
    }

    public function xoa($ma)
    {
        $sql = "delete from user where ma =". $ma;
        $this->db->query($sql);
        return ($this->db->execute());
    }
    
    public function layDanhSachTaiKhoan(){
        $sql = 'select * from user inner join  loaitaikhoan on user.maloaitaikhoan = loaitaikhoan.ma';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }
    public function layDanhSachLoaiTaiKhoan()
    {
        $sql = 'select * from loaitaikhoan';
        $this->db->query($sql);
        return $this->db->fetchAll();
    }


    public function kiemTraTenNguoiDung($name){
        $sql = "select * from user where ten like N'$name'";
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->rowCount() == 1;
    }

    public function layNguoiDung($name){
        $sql = "select * from user where ten like N'.$name.' or ma =  ". $name;
        $this->db->query($sql);
        return $this->db->first();
    }
}