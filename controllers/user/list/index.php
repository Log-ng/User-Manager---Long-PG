<?php

require_once '../../../base.classes/core/smarty.php';
include_once '../../../base.classes/core/database.php';
include_once '../../../models/user.model.php';


$smarty = new mySmarty();

$database = new Database();
$db = $database->connect();

$user = new User($db);

$result = $user->read();

$num = $result->rowCount();

if ($num > 0) {
    $users_arr = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $user = array(
            'username' => $username,
            'password' => $password,
            'fullName' => $fullName
        );

        array_push($users_arr, $user);
    }
}

$smarty->assign('users', $users_arr);
$smarty->display('list.user.tpl');