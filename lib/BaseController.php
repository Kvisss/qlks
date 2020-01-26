<?php
class BaseController
{
    //protected $request;
    //protected $response;
    public function __construct($request, $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function getView($name, $cssname, $variable = array())
    {
        extract(array_merge(
            $variable,
            [
                'request' => $this->request,
                'response' => $this->response,
            ]
        ));
        $name .= 'View';
        require("./View/master.php");
    }
    public function getViewAdmin($name, $cssname, $variable = array())
    {
        extract(array_merge(
            $variable,
            [
                'request' => $this->request,
                'response' => $this->response,
            ]
        ));
        $name .= 'View';
        require("./view/AdminView/adminMaster.php");
    }
    public function getViewLogin($name, $variable = array())
    {
        extract(array_merge(
            $variable,
            [
                'request' => $this->request,
                'response' => $this->response,
            ]
        ));
        $name .= '';
        require("./view/AdminView/admin-login.php");
    }
    public function getViewTest($name, $variable = array())
    {
        extract(array_merge(
            $variable,
            [
                'request' => $this->request,
                'response' => $this->response,
            ]
        ));
        $name .= '';
        require("./view/testView/testView.php");
    }
}
