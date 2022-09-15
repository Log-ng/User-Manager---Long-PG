<?php

require_once('../../smarty/libs/Smarty.class.php');

class mySmarty extends Smarty {
    function __construct() {
        parent::__construct();

        $this->setTemplateDir('../../views/user');
        $this->setCompileDir('../../smarty/templates_c');
        $this->setCacheDir('../../smarty/cache');
    }
}
