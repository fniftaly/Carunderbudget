<?php

use src\dbconfig\Db;
use src\classes\UserImpl;

//
include '../classes/UserImpl.php';
include '../dbconfig/Db.php';

$user = json_decode(file_get_contents('php://input'));

if (isset($user)) {

    $userid = md5($user->username . $user->password);
//    
    $dbObj = new Db();

    $usr = new UserImpl();

    $sql = $usr->verifyUser($userid);

    $arr = $dbObj->select($sql);
//    
    if (count($arr) >= 1 && $arr[0]['userid'] === $userid) {
        
        print "validuser";
        
    } else {

        print 'error';
    }
}

exit;

