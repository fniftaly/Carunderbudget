<?php

/**
 * Description of User
 *
 * @author def
 */
namespace src\classes;

class User {

    private $firstname;
    private $lastname;
    private $phone;
    private $email;
    private $username;
    private $password;

    public function __construct() {
    }

   public function createuser($firstname, $lastname,$phone,$email,$username,$password){
       
       $this->firstname = $firstname;
       
       $this->lastname = $lastname;
       
       $this->phone = $phone;
       
       $this->email = $email;
       
       $this->username = $username;
       
       $this->password = $password;
       
       return $this;
   }


   public function getFirstname() {
        return $this->firstname;
    }

   public function getLastname() {
        return $this->lastname;
    }

   public function getPhone() {
        return $this->phone;
    }

   public function getEmail() {
        return $this->email;
    }

   public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

   public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

   public function setPhone($phone) {
        $this->phone = $phone;
    }

   public function setEmail($email) {
        $this->email = $email;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

        public function __destruct() {
        
        $this->firstname = null;
        
        $this->lastname = null;
        
        $this->cellphone = null;
        
        $this->homephone == null;
        
        $this->email == null;
    }

}

//$userobj = new \src\classes\User;
//
//$userobj->createuser("Daldan", "Bassan", 12121212, 2323232, "hell@hell.com");
//echo $userobj->getEmail().'<br/>';
//echo "<pre>"; print_r($userobj);