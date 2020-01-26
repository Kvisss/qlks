<?php

class TestController extends BaseController
{
    public function __construct($request, $response)
    {
        parent::__construct($request, $response);
        $db = Helper::intanceDatabase();
        $this->roomModel = Helper::intanceModel("Room");
        $this->customerModel = Helper::intanceModel("Customer");
        $this->employModel = Helper::intanceModel("Employ");
        $this->oderModel = Helper::intanceModel("Oder");
        $this->serviceModel = Helper::intanceModel("Service");
    }


    /*test room model */
    function test2()
    {

        parent::viewpath('view/index-room');
        //$service->render('view/index-rooms.html');
        //$service->layout("view/index-roomview.php");
        //parent::getView('index');
    }

    function test()
    {
        $room = $this->roomModel->getRoomById("2");
        print_r($room);
    }

    function test3()
    {
        $room = $this->roomModel->getStatusRoom();
        print_r($room);
    }




    function test4()
    {
        $tenphong = '506';
        $maloaiphong = '2';
        $tiennghi = 'Dieu hoa';
        $thongtin = 'sach se dep de';
        $sogiuong = '2';
        $songuoi = '4';
        $data = array(
            "TenPhong" => $tenphong,
            "MaLoaiPhong" => $maloaiphong,
            "TienNghi" => $tiennghi,
            "ThongTin" => $thongtin,
            "SoGiuong" => $sogiuong,
            "SoNguoi" => $songuoi,
        );
        $room = $this->roomModel->addRoom($data);

        print_r($room);
    }

    function test5()
    {
        //$room = $this->roomModel->getAllRoom();
        $room = $this->roomModel->getRoomType();
        //print_r($room);

        // foreach($room as $key=> $phong){
        //     echo $phong['TenLoaiPhong'];
        //     echo $phong['DonGia'];
        // }

        $return = [
            'room' => $room
        ];

        parent::getView('index-room', 'style-rooms', $return);
    }



    function test6()
    {
        $this->roomModel->deleteRoom('1');
        echo "Xoá thành công";
    }

    function test7()
    {
        $tenphong = '506';
        $maloaiphong = '3';
        $tiennghi = 'Dieu hoa, tu lanh';
        $thongtin = 'rat sach se dep de';
        $sogiuong = '1';
        $songuoi = '2';
        $data = array(
            "TenPhong" => $tenphong,
            "MaLoaiPhong" => $maloaiphong,
            "TienNghi" => $tiennghi,
            "ThongTin" => $thongtin,
            "SoGiuong" => $sogiuong,
            "SoNguoi" => $songuoi,
        );
        $this->roomModel->updateRoom('6', $data);
        echo "Xoá thành công";
    }


    /*test EmployModel */
    function test8()    //add nhan vien
    {
        $hoten = 'Ninh Giang Truong';
        $diachi = 'Ha Dong';
        $dienthoai = '123456789';
        $cmnd = '123321123';
        $ngaysinh = '1998-01-01';
        $noisinh = 'Ha Noi';
        $tamtru = 'Ha Dong';
        $thuongtru = 'Ha Dong';
        $ngayvaolam = '2019-01-01';
        $ghichu = '';
        $quyen = '0';

        $data = array(
            "HoTen" => $hoten,
            "DiaChi" => $diachi,
            "DienThoai" => $dienthoai,
            "CMND" => $cmnd,
            "NgaySinh" => $ngaysinh,
            "NoiSinh" => $noisinh,
            "TamTru" => $tamtru,
            "ThuongTru" => $thuongtru,
            "NgayVaoLam" => $ngayvaolam,
            "GhiChu" => $ghichu,
            "Quyen" => $quyen,
        );
        $this->employModel->addEmploy($data);
        echo "add thành công";
    }
    function test9()    //xoa nhan vien
    {
        $this->roomModel->deleteRoom('1');
        echo "Xoá thành công";
    }



    /*check ngày tháng*/
    /*trừ ngày tháng */
    function test10()
    {

        $checkin = $this->request->param("ngayden", "");
        $checkout = $this->request->param("ngaydi", "");
        $den = new DateTime($checkin);
        $di = new DateTime($checkout);

        if (strtotime($checkin) > strtotime($checkout)) {
            echo "nhập lại ngày tháng";
        } else {
            $interval = $di->diff($den);
            echo $interval->d . " days ";
        }
    }

    /*trừ ngày tháng lấy ra từ db */
    function test11()
    {
        $time = $this->oderModel->getDateOderById("1");

        //print_r($time);

        foreach ($time as $k => $v) {
            // echo $v["NgayVao"] . "<br>";
            // echo $v["NgayRa"];

            $den = new DateTime($v["NgayVao"]);
            $di = new DateTime($v["NgayRa"]);

            if (strtotime($v["NgayVao"]) > strtotime($v["NgayRa"])) {
                echo "nhập lại ngày tháng";
            } else {
                $interval = $di->diff($den);
                echo "<br>" . $interval->d . " days ";
            }
        }
    }

    /*tự động thêm đơn đặt phòng*/
    function test12()
    {
        $db = Helper::intanceDatabase();
        $checkdate = false;
        $checkroom = false;
        $mess = "";
        $room = $this->roomModel->getRoomByTypeRoomAndStatus("1", "0");
        //print_r($room);
        //echo count($room);
        $oder = $this->oderModel->getDateOder();


        $makhachhang = "6";
        $maphong = "";
        $ngayvao = "2019-08-14";
        $ngayra = "2019-08-18";
        $tratruoc = "";
        $khuyenmai = "";
        $sophong = 3;
        $ghichu = "";

        $data = array(
            "MaKhachHang" => $makhachhang,
            "MaPhong" => $maphong,
            "NgayVao" => $ngayvao,
            "NgayRa" => $ngayra,
            "TraTruoc" => $tratruoc,
            "KhuyenMai" => $khuyenmai,
            "SoPhong" => $sophong,
            "GhiChu" => $ghichu
        );

        foreach ($oder as $k => $v) {
            print_r ($v['NgayRa']);
            if (strtotime($ngayvao) < strtotime($v["NgayRa"])) {
                $mess = "nhập lại ngày tháng";
            }
            // else {
            //     if (($sophong > count($room))) {
            //         $mess =  "k du phong con trong";
            //     } 
                    else {
                    $this->oderModel->addOder($data);

                    $update = array(
                        "TrangThai" => "1"
                    );
                    $this->roomModel->updateStatusRoom($sophong, $update, "0");

                    $mess = 'them thanh cong';
                }

            // }
        }
        echo $mess;
    }

    function test13()
    {
        $service = $this->serviceModel->getAllService();
        $return = [
            'room'=>$service
        ]; 
        print_r($return);
    }
}
