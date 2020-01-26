<?php

class IndexController extends BaseController
{
    public function __construct($request, $response)
    {
        parent::__construct($request, $response);
        $this->roomModel = Helper::intanceModel("Room");
    }

    function index()
    {  
        $room = $this->roomModel->getRoomType();
        $return = [
            'room'=>$room
        ];    
        parent::getView('index-home', 'style-home', $return);
    }


    function intro()
    {
        parent::getView('index-intro', 'style-intro');
        
    }

    function room()
    {
        $room = $this->roomModel->getRoomType();
        $return = [
            'room'=>$room
        ];    
        parent::getView('index-room', 'style-rooms', $return);
    }

    function info()
    {
        $room = $this->roomModel->getRoomType();
        $return = [
            'room'=>$room
        ]; 
        parent::getView('index-info', 'style-infor', $return);
    }

    function checkOut()
    {
        parent::getView('index-hotel-checkuot', 'hotel-checkout');
    }

    function contact()
    {
        parent::getView('index-contact', 'style-hotel-checkout');
    }

    function service()
    {
        parent::getView('index-service', 'style-service');
    }

    function deluxe()
    {
        $room = $this->roomModel->getRoomType();
        $return = [
            'room'=>$room
        ];
        parent::getView('index-infor-deluxe', 'style-infor', $return);
    }

    function superior()
    {
        $room = $this->roomModel->getRoomType();
        $return = [
            'room'=>$room
        ];
        parent::getView('index-infor-superior', 'style-infor', $return);
    }
}
