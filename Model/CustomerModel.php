<?php
class CustomerModel
{
    public function __constructor()
    {
        $this->db = Helper::intanceDatabase();
    }

    public function getAllCustomer()
    {
        $db = Helper::intanceDatabase();

        $db->join("khachhang k", "n.MaNhanVien=k.NguoiTiepNhan", "LEFT");
        $db->joinWhere("khachhang k", "k.NguoiTiepNhan", $id);
        $customer = $db->get("khachhang k", null, "k.Hoten, k.DiaChi, k.DienThoai,k.DienThoai,k.CMND,k.GioiTinh,k.NgaySinh,k.NoiSinh,k.SoVisa, k.ThoiHanVisa,k.NgayNhapCanh,k.TamTruTaiVietNam,k.QuocTich,k.NgayDen,e.Hoten");
        return $customer;
    }

    public function getCustomerById($id)
    {
        $db = Helper::intanceDatabase();
        $db->where("MaKhachHang", $id);
        $customer = $db->get('khachhang');
        return $customer;
    }

    public function addCustomer($data)
    {
        $db = Helper::intanceDatabase();
        // $data = array(
        //     "HoTen" => $hoten,
        //     "DiaChi" => $diachi,
        //     "DienThoai" => $dienthoai,
        //     "CMND" => $cmnd,
        //     "GioiTinh" => $gioitinh,
        //     "NgaySinh" => $ngaysinh,
        //     "NoiSinh" => $noisinh,
        //     "SoVisa" => $sovisa,
        //     "ThoiHanVisa" => $thoihanvisa,
        //     "NgayNhapCanh" => $ngaynhapcanh,
        //     "TamTruTaiVietNam" => $tamtrutaivietnam,
        //     "QuocTich" => $quoctich,
        //     "NgayDen" => $ngayden,
        //     "NguoiTiepNhan" => $nguoitiepnhan

        // );

        $db->insert('khachhang', $data);
        return $data;
    }

    public function updateCustomer($id, $data)
    {
        $db = Helper::intanceDatabase();
        // $data = array(
        //     "HoTen" => $hoten,
        //     "DiaChi" => $diachi,
        //     "DienThoai" => $dienthoai,
        //     "CMND" => $cmnd,
        //     "GioiTinh" => $gioitinh,
        //     "NgaySinh" => $ngaysinh,
        //     "NoiSinh" => $noisinh,
        //     "SoVisa" => $sovisa,
        //     "ThoiHanVisa" => $thoihanvisa,
        //     "NgayNhapCanh" => $ngaynhapcanh,
        //     "TamTruTaiVietNam" => $tamtrutaivietnam,
        //     "QuocTich" => $quoctich,
        //     "NgayDen" => $ngayden,
        //     "NguoiTiepNhan" => $nguoitiepnhan

        // );
        $db->where('id', $id);
        $db->update('khachhang', $data);
        return $data;
    }

    public function deleteCustomer($id)
    {
        $db = Helper::intanceDatabase();
        $db->where('id', $id);
        if ($db->delete('users'));   // echo 'successfully deleted';
        return $db;
    }
}
