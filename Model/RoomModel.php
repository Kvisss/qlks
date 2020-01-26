<?php
class RoomModel
{
    public function __constructor()
    {
        $this->db = Helper::intanceDatabase();
    }

    public function getAllRoom()
    {
        $db = Helper::intanceDatabase();
        $room = $db->get("phong");
        return $room;
    }

    public function getRoomType()
    {
        $db = Helper::intanceDatabase();
        $room = $db->get('loaiphong');
        return $room;
    }

    public function getStatusRoom()
    {
        $db = Helper::intanceDatabase();
        $room = $db->get('phong', null, 'MaPhong, TenPhong, TrangThai');
        return $room;
    }

    public function getRoomByTypeRoomAndStatus($typeRoom, $stt)
    {
        $db = Helper::intanceDatabase();
        $db->join("phong p", "p.MaLoaiPhong=l.MaLoaiPhong", "LEFT");
        $db->joinWhere("phong p", "l.MaLoaiPhong");
        $db->where("p.TrangThai", $stt);
        $db->where("l.MaLoaiPhong", $typeRoom);
        $room = $db->get('loaiphong l', null, 'p.MaPhong, p.TenPhong, p.MaLoaiPhong, p.TrangThai');
        return $room;
    }


    public function getRoomById($id)
    {
        $db = Helper::intanceDatabase();
        $db->join("phong p", "p.MaLoaiPhong=l.MaLoaiPhong", "LEFT");
        $db->joinWhere("phong p", "l.MaLoaiPhong");
        $db->where('p.MaPhong', $id);
        $oder = $db->get("loaiphong l", null, "p.MaPhong, p.TenPhong, p.ThongTin, l.TenLoaiPhong, l.DonGia, p.TrangThai");

        return $oder;
        // $db->where('MaPhong', $id);
        // $room = $db->get('phong');
        // return $room;
    }
    public function getRoom()
    {
        $db = Helper::intanceDatabase();
        $db->join("phong p", "p.MaLoaiPhong=l.MaLoaiPhong", "LEFT");
        $db->joinWhere("phong p", "l.MaLoaiPhong");
        $oder = $db->get("loaiphong l", null, "p.MaPhong, p.TenPhong, p.TienNghi, p.ThongTin, l.TenLoaiPhong, l.DonGia, p.TrangThai, l.SoGiuong, l.SoNguoi");

        return $oder;
        // $db->where('MaPhong', $id);
        // $room = $db->get('phong');
        // return $room;
    }
    public function addRoom($data)
    {
        $db = Helper::intanceDatabase();

        $db->insert('phong', $data);
        return $data;
    }
    public function updateRoom($id, $data)
    {
        $db = Helper::intanceDatabase();
        $db->where('MaPhong', $id);
        $db->update('phong', $data);
        return $data;
    }
    public function updateStatusRoom($sophong, $data, $stt)
    {
        $db = Helper::intanceDatabase();
        $db->where('TrangThai', $stt);
        $db->update('phong', $data, $sophong);

        return $data;
    }
    public function deleteRoom($id)
    {
        $db = Helper::intanceDatabase();
        $db->where('MaPhong', $id);
        if ($db->delete('phong'));   // echo 'successfully deleted';
        return $db;
    }
}
