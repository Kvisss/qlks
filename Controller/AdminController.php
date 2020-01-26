<?php
class AdminController extends BaseController
{
    public function __construct($request, $response)
    {
        parent::__construct($request, $response);
        $this->userModel = Helper::intanceModel("User");
        $this->roomModel = Helper::intanceModel("Room");
        $this->serviceModel = Helper::intanceModel("Service");
        $this->typeroomModel = Helper::intanceModel("Typeroom");
        $this->employModel = Helper::intanceModel("Employ");
    }

    function indexLogin()
    {
        parent::getViewlogin('admin-login');
    }
    function login()
    {
        $loginOK = false;
        $mess = "";
        if (isset($_SESSION['idUser'])) {
            $mess = "Ban da dang nhap";
        }

        $username = $this->request->param("username", "");
        $password = $this->request->param("password", "");

        if($username == "" && $password == ""){
            echo "Ban chua nhap mat khau hoac tai khoan";
        }
        else if ($username != "" && $password != "") {
            $user = $this->userModel->getUserByUsernameAndPassword($username, $password);
            if (!is_null($user)) {
                $_SESSION['idUser'] = $user['id'];
                
                $mess = "Dang nhap thanh cong  ";
                header('Location: /QLKS/admincp/home');
                $loginOK = true;
                
            } else {
                $mess = "Dang nhap loi";
                header('Refresh:1; url=/QLKS/admincp/');
                
            }
        }
        echo $_SESSION['idUser'];
        echo $mess . "<br>";
        echo $username .$password;
        return $loginOK;
        
    
    }

    public function logout(){
		$this->session->sess_destroy();
        //redirect("login/index",'refresh');
        header('Refresh:1; url=/QLKS/admincp/');
	}



    public function index()
    {

        parent::getViewAdmin("index-home", 'style-home');
    }

    public function bill()
    {
        parent::getViewAdmin('bill', 'style-bill');
    }

    public function customer()
    {
        parent::getViewAdmin('customer', '');
    }

    public function introduction()
    {
        parent::getViewAdmin('index-introduction', 'style-introduction');
    }

    public function member()
    {
        $employ = $this->employModel->getAllEmployAndAccount();
        $return = [
            'employ'=>$employ
        ]; 
        parent::getViewAdmin('index-member', 'style-member', $return);
        //print_r($return);
    }

    public function room()
    {
        $room = $this->roomModel->getRoom();
        $return = [
            'room'=>$room
        ]; 
        parent::getViewAdmin('index-room', 'style-room', $return);
    }

    public function service()
    {
        $service = $this->serviceModel->getAllService();
        $return = [
            'service'=>$service
        ]; 
        parent::getViewAdmin('index-service', '', $return);
    }

    public function typeRoom()
    {
        $typeRoom = $this->typeroomModel->getAllTyperoom();
        $return = [
            'typeRoom'=>$typeRoom
        ];
        parent::getViewAdmin('index-type-room', 'style-room', $return);
        // /print_r($return);
    }
}
