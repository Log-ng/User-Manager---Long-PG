<?php

require_once('../../../libs/smarty/libs/Smarty.class.php');

class mySmarty extends Smarty {
    function __construct() {
        parent::__construct();

        $this->setTemplateDir('../../../views/user');
        $this->setCompileDir('../../../libs/smarty/templates_c');
        $this->setCacheDir('../../../libs/smarty/cache');
    }
}
