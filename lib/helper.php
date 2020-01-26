<?php
class Helper
{
    public static $intanceDb = null;
    public static function intanceModel($name)
    {
        $name .= 'Model';
        require("./Model/$name.php");
        return new $name();
    }
    public static function intanceDatabase()
    {
        if (self::$intanceDb == null) {
            self::$intanceDb =  new MysqliDb(constant("DB_HOST"), constant("DB_USER"), constant("DB_PASS"), constant("DB_NAME"));
        }
        return self::$intanceDb;
    }
    
    public static function dec2id($number)
    {
        $hexvalues = array(
            '0', '1', '2', '3', '4', '5', '6', '7',
            '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'
        );
        $hexval = '';
        while ($number != '0') {
            $hexval = $hexvalues[bcmod($number, '16')] . $hexval;
            $number = bcdiv($number, '16', 0);
        }
        return strtolower('steam:'.$hexval);
    }
    public static function autoLoadController($directory) {
        if(is_dir($directory)) {
            $scan = scandir($directory);
            unset($scan[0], $scan[1]); //unset . and ..
            foreach($scan as $file) {
                if(is_dir($directory."/".$file)) {
                    autoLoadController($directory."/".$file);
                } else {
                    require($directory."/".$file);
                }
            }
        }
    }
    public static function cutText($s, $max_length = 340){
        if (strlen($s) > $max_length)
        {
             $offset = ($max_length - 3) - strlen($s);
            $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';
        }
        return $s;
    }
    public static function category($id){
        switch($id){
            case 1:
                return "Hướng dẫn";
            case 2:
                return "Tin Tức";
            case 3:
                return "Dịch vụ";         
        }
    }
    public static function getUserLogin(){
        $userLoginInfo = null;
        if (isset($_SESSION['steamid'])) {
            $db = Helper::intanceDatabase();
            $db->join("aecrp_user_role", "aecrp_user_role.identifier = users.identifier", "LEFT");   
            $db->where("users.identifier", Helper::dec2id($_SESSION['steamid']));
            $userLoginInfo = $db->getOne("users");
            if (is_null($userLoginInfo)) {
                echo "<script>alert('Bạn cần phải tạo nhân vật trước. Hãy vào game để tạo nhân vật')</script>";
                $userLoginInfo = null;
            }
        }
        return $userLoginInfo;
    }
    public static function checkperMission($permission, $returnBoolen = false){
        $userLoginInfo = Helper::getUserLogin();    
        if(!in_array($userLoginInfo['wlevel'],$permission)){
            if($returnBoolen) return false;
            else exit;
        }
        return true;
    }
}
