<?php

namespace src\classes;

interface CreateUser {
    
   public function addUser(User $usr);
   
   public function updateUser($userid);
   
   public function deleteUser($userid);
}
