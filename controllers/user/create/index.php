<?php

require_once '../../../base.classes/core/smarty.php';
include_once '../../../base.classes/core/database.php';
include_once '../../../models/user.model.php';

$database = new Database();
$db = $database->connect();

$user = new User($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user->username = htmlspecialchars($_POST['username']);
    $user->password = htmlspecialchars($_POST['password']);
    $user->fullname = htmlspecialchars($_POST['fullname']);
    
if($user->validate()) {  
    if($user->create()) {
        header('location: ../list');
    } else {
        echo "Error";
    }}
}

$smarty = new mySmarty();

$smarty->display('create.tpl');


