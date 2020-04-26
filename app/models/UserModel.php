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
    
    public function layDanhSachTaiKhoan(){
        $sql = 'select * from user';
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
        $sql = "select * from user where ten like N'$name'";
        $this->db->query($sql);
        return $this->db->first();
    }
}