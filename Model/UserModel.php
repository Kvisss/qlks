<?php
class UserModel
{
    public function __constructor()
    {
        $this->db = Helper::intanceDatabase();
    }
    public function getUserById($id){
        $db =  Helper::intanceDatabase();
        $db->where("id", $id);
        return $db->getOne("users");
    }

    public function getUserByUsernameAndPassword($username, $password){
        $db =  Helper::intanceDatabase();
        $db->where("username", $username);
        $db->where("password", $password);
        return $db->getOne("user");
    }
}
