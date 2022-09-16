<?php

require_once '../../../base.classes/core/smarty.php';
include_once '../../../base.classes/core/database.php';
include_once '../../../models/user.model.php';

$smarty = new mySmarty();

$smarty->display('login.tpl');