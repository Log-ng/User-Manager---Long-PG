<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../configs/config.database.php';
include_once '../../models/user.model.php';

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

        array_push($pd_arr, $pd_item);
    }

    echo json_encode($pd_arr);
} else {
    echo json_encode(
        array('message' => 'No user')
    );
}