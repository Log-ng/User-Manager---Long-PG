<?php

require_once 'configs/config.smarty.php';
include_once 'configs/config.database.php';
include_once 'models/user.model.php';

$smarty = new mySmarty();

$database = new Database();
$db = $database->connect();

$user = new User($db);

$result = $user->read();

$num = $result->rowCount();

if ($num > 0) {
    $pd_arr = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $pd_item = array(
            'user_id' => $user_id,
            'username' => $username,
            'password' => $password,
            'fullName' => $fullName
        );

        // Push to "data"
        array_push($pd_arr, $pd_item);
    }
}
$smarty->assign('users', $pd_arr);
$smarty->display('template.tpl');


