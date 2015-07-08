<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author def
 */
namespace src\classes;

class User {

    private $firstname;
    private $lastname;
    private $cellphone;
    private $homephone;
    private $email;

    public function __construct() {
    }

   public function createuser($firstname, $lastname,$cellphone,$homephone,$email){
       
       $this->firstname = $firstname;
       
       $this->lastname = $lastname;
       
       $this->cellphone = $cellphone;
       
       $this->homephone = $homephone;
       
       $this->email = $email;
       
       return $this;
   }


   public function getFirstname() {
        return $this->firstname;
    }

   public function getLastname() {
        return $this->lastname;
    }

   public function getCellphone() {
        return $this->cellphone;
    }

   public function getHomephone() {
        return $this->homephone;
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

   public function setCellphone($cellphone) {
        $this->cellphone = $cellphone;
    }

   public function setHomephone($homephone) {
        $this->homephone = $homephone;
    }

   public function setEmail($email) {
        $this->email = $email;
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