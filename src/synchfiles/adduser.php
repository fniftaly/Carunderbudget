<?php

use src\dbconfig\Db;
use src\classes\UserImpl;
use src\classes\User;

//
include '../classes/UserImpl.php';
include '../dbconfig/Db.php';
include '../classes/User.php';

$user = json_decode(file_get_contents('php://input'));

if (isset($user)) {
    $userent = new User();

    $userent->createuser($user->first, $user->last, $user->phone, $user->email, $user->username, $user->pass);
//   
    $dbObj = new Db();
//   
    $usr = new UserImpl();

    $sql = $usr->addUser($userent);
//   
    if ($sql !== NULL) {
        $dbObj->query($sql);
        print "Success!";
    }
} else {

    print 'error';
}

exit;
