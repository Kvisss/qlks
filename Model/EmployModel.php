<?php
class EmployModel
{
    public function __constructor()
    {
        $this->db = Helper::intanceDatabase();
    }

    public function getAllEmploy()
    {
        $db = Helper::intanceDatabase();
        $employ = $db->get('nhanvien');
        return $employ;
    }
    public function getAllEmployAndAccount()
    {
        $db = Helper::intanceDatabase();
        $db->join("nhanvien n", "n.MaNhanVien=u.MaNhanVien", "LEFT");
        //$db->joinWhere("dondatphong d", "p.MaPhong");
        $employ = $db->get('user u', null, 'n.MaNhanVien, n.HoTen, n.DiaChi, n.DienThoai, n.CMND, n.NgaySinh, n.NoiSinh, n.TamTru, n.NgayVaoLam, n.GhiChu, n.Quyen, n.Email, u.username');
        return $employ;
    }

    public function getEmployById($id)
    {
        $db = Helper::intanceDatabase();
        $db->where("MaNhanVien", $id);
        $employ = $db->get('nhanvien');
        return $employ;
    }
    public function addEmploy($data)
    {
        $db = Helper::intanceDatabase();
        
        $db->insert('nhanvien', $data);
        return $data;
    }
    public function updateEmploy($id, $data)
    {
        $db = Helper::intanceDatabase();
        $db->where('MaNhanVien', $id);
        $db->update('nhanvien', $data);
        return $data;
    }
    public function deleteEmploy($id)
    {
        $db = Helper::intanceDatabase();
        $db->where('MaNhanVien', $id);
        if ($db->delete('nhanvien'));   // echo 'successfully deleted';
        return $db;
    }
}
