<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once '../../configs/config.database.php';
include_once '../../models/user.model.php';

$database = new Database();
$db = $database->connect();

$user = new User($db);

$data = json_decode(file_get_contents("php://input"));

$user->username = $data->username;
$user->password = password_hash($data->password, PASSWORD_DEFAULT);
$user->fullName = $data->fullName;

if($user->create()) {
    echo json_encode(
        array('message' => 'Account Created', 'status' => 'Success')
    );
} else {
    echo json_encode(
        array('message' => 'Account Not Created', 'status' => 'Fail')
    );
}


