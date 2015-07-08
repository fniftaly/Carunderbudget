<?php
  $user = json_decode(file_get_contents('php://input'));
     
     if(isset($user)){
         
         print $user->first." ".$user->last;
         
     }else{
         
         print 'error';
     }
     
     exit;

