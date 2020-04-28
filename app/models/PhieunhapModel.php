<?php
//cai model nay tao het r à
// ừ gần hết còn thiếu mấy hàm gọi 1 -n nữa
class PhieunhapModel {
    // db để kết nối csdl
    //ok r
    //t cứ làm mấy cái trong đây đã
    private $db;
    public function __construct()
    {

        $this->db = new Database;
    }
    public function themNCC($data){
        $sql = "insert into nhacungcap(ten, sodienthoai, diachi, email, nguoilienhe) values(:ten, :sodienthoai, :diachi,:email, :nguoilienhe)";
         // đầu tiên tạo truy vấn. dòng dưới

        $this->db->query($sql);
        // gán giá trị
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':nguoilienhe', $data['nguoilienhe']);
        // thực thi
        $this->db->execute();
    }

    public function suaNCC($data)
    {
        $sql = "update nhacungcap set ten = :ten, sodienthoai = :sodienthoai, diachi =:diachi, email= :email, nguoilienhe=:nguoilienhe where ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma',$data['ma']);
        $this->db->bind(':ten', $data['ten']);
        $this->db->bind(':sodienthoai', $data['sodienthoai']);
        $this->db->bind(':diachi', $data['diachi']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':nguoilienhe', $data['nguoilienhe']);
        $this->db->execute();
    }

    public function xoaNCC($maNCC)
    {
        // 2 cái này tương tự
        $sql = "DELETE FROM nhacungcap WHERE ma =:ma";
        $this->db->query($sql);
        $this->db->bind(':ma', $maNCC);
        $this->db->execute();
    }
    
    public function layDanhSach(){
        // cái này tạo truy vấn xong đổ dl ra bảng. 
        $sql = 'select * from nhacungcap';
        $this->db->query($sql);
        // nó return cái mảng nhà cung cấp
        return $this->db->fetchTable('nhacungcap');
    }

    public function layNhaCungCap($maNCC){
        // tương tự
        $sql = 'select * from nhacungcap where ma = '. $maNCC. ';';
        $this->db->query($sql);
        return $this->db->first();
    }
}