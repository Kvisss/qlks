<?php
class TyperoomModel
{
    public function __constructor()
    {
        $this->db = Helper::intanceDatabase();
    }

    public function getAllTyperoom()
    {
        $db = Helper::intanceDatabase();
        $typeroom = $db->get('loaiphong');
        return $typeroom;
    }

    public function getTyperoomById($id)
    {
        $db = Helper::intanceDatabase();
        $db->where("MaloaiPhong", $id);
        $typeroom = $db->get('loaiphong');
        return $typeroom;
    }
    public function addTyperoom($data)
    {
        $db = Helper::intanceDatabase();
        // $data = array(
        //     "MaLoaiPhong" => $maloaiphong,
        //     "TenLoaiPhong" => $tenloaiphong,
        //     "DonGia" => $dongia,
        // );

        $db->insert('loaiphong', $data);
        return $data;
    }
    public function updateTyperoom($id, $data)
    {
        $db = Helper::intanceDatabase();
        // $data = array(
        //    "MaLoaiPhong" => $maloaiphong,
        //     "TenLoaiPhong" => $tenloaiphong,
        //     "DonGia" => $dongia,
        // );
        $db->where('id', $id);
        $db->update('loaiphong', $data);
        return $data;
    }
    public function deleteTyperoom($id)
    {
        $db = Helper::intanceDatabase();
        $db->where('id', $id);
        if ($db->delete('users'));   // echo 'successfully deleted';
        return $db;
    }
}
