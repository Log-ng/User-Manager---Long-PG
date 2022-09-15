<?php

require_once '../../configs/config.smarty.php';
include_once '../../configs/config.database.php';
include_once '../../models/user.model.php';

$smarty = new mySmarty();

$smarty->display('login.tpl');