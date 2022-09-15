<?php
// header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');
// header('Access-Control-Allow-Methods: POST');
// header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

require_once '../../configs/config.smarty.php';
include_once '../../configs/config.database.php';
include_once '../../models/user.model.php';

$smarty = new mySmarty();

$smarty->display('create.tpl');


