<?php
class OderModel
{
    public function __constructor()
    {
        $this->db = Helper::intanceDatabase();
    }

    public function getAllOder()
    {
        $db = Helper::intanceDatabase();
        $db->join("dondatphong d", "d.MaKhachHang=k.MaKhachHang", "LEFT");
        $db->joinWhere("dondatphong d", "k.MaKhachHang", $id);
        $oder = $db->get("oder o", null, "k.Hoten");
        return $oder;

        $db->join("dondatphong d", "d.MaPhong=p.MaPhong", "LEFT");
        $db->joinWhere("dondatphong d", "p.MaPhong", $id);
        $oder = $db->get("oder o", null, "p.TenPhong");
        return $oder;

        $oder = $db->get('dondatphong');
        return $oder;
    }

    public function getDateOder(){
        $db = Helper::intanceDatabase();
        $oder = $db->get('dondatphong', null, 'MaKhachHang, NgayVao, NgayRa');
        return $oder;
    }

    public function getDateOderById($id){
        $db = Helper::intanceDatabase();
        $db->where("MaDonDatPhong", $id);
        $oder = $db->get('dondatphong', null, 'NgayVao, NgayRa');
        return $oder;
    }

    public function getOderById($id)
    {
        $db = Helper::intanceDatabase();
        $db->where("MaDonDatPhong", $id);
        $oder = $db->get('dondatphong');
        return $oder;
    }
    public function addOder($data)
    {
        $db = Helper::intanceDatabase();
        $db->insert('dondatphong', $data);
        return $data;
    }
    public function updateOder($id, $data)
    {
        $db = Helper::intanceDatabase();
        // $data = array(
        //     "MaDonDatPhong" => $madondatphong,
        //     "MaKhachHang" => $makhachhang,
        //     "MaPhong" => $maphong,
        //     "NgayVao" => $ngayvao,
        //     "NgayRa" => $ngayra,
        //     "TraTruoc" => $tratruoc,
        //     "KhuyenMai" => $khuyenmai,
        //     "GhiChu" => $ghichu

        // );

        $db->where('id', $id);
        $db->update('dondatphong', $data);
        return $data;
    }
    public function deleteOder($id)
    {
        $db = Helper::intanceDatabase();
        $db->where('id', $id);
        if ($db->delete('users'));   // echo 'successfully deleted';
        return $db;
    }
}
