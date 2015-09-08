<?php

namespace src\classes;
include 'CreateUser.php';

class UserImpl implements CreateUser{
    
    
    public function __construct() {
        
    }
            
    public function addUser(User $usr) {
        if(isset($usr) && $usr instanceof User){
        $userid = md5($usr->getUsername().$usr->getPassword());
        $first = $usr->getFirstname();
        $last = $usr->getLastname();
        $phone = $usr->getPhone();
        $email = $usr->getEmail();
        $username = $usr->getUsername();
        $password = $usr->getPassword();
        
        $sql = "insert into user(`userid`,`firstname`,`lastname`,`phone`,`email`,`username`, `password`) values('$userid'"
                . ",'$first','$last',$phone,'$email','$username','$password')";
        return $sql;
        }else{
            return NULL;
        }
    }

    public function deleteUser($userid) {
        
    }

    public function updateUser($userid) {
        
    }

    public function verifyUser($userid) {
        if($userid){
            
            $query = sprintf("SELECT userid FROM user WHERE userid='%s'",
                    
            mysql_real_escape_string($userid));
            
            return $query;
        }
    }

}
