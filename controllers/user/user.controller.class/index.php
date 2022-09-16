<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once '../../../base.classes/core/database.php';
include_once '../../../models/user.model.php';

$database = new Database();
$db = $database->connect();

$user = new User($db);

if ( isset($_POST['submit']) ) {
  $user->username = $_POST[username];
  $user->password = $_POST[password];
  $user->fullname = $_POST[fullname];
  if($user->create()) {
    echo "Compolete!";
  } else {
    echo "Error";
  }
}
