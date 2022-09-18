<?php

session_start();

if (isset($_SESSION['loggedin'])) {
	header('location: ../list');
	exit;
}

require_once '../../../base.classes/core/smarty.php';
include_once '../../../base.classes/core/database.php';
include_once '../../../models/user.model.php';

$smarty = new mySmarty();

$database = new Database();
$db = $database->connect();

$user = new User($db);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user->username = htmlspecialchars($_POST['username']);
    $user->password = htmlspecialchars($_POST['password']);

    if($user->authLogin()) {  
        session_start(); 
        session_destroy();
        unset($_SESSION);
        session_start(); 
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $user->username;

        header('location: ../list');
    }
    else {
        echo "<div id=\"err-login\" class=\" text-danger col d-flex justify-content-center\">The Username or Password is Incorrect</div>";
    }
}

$smarty->display('login.tpl');

