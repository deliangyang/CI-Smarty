<?php
/**
 * Created by unkown ide ps.
 * User: deliang
 * DateTime: 9/22/15 4:49 PM
 */

class Controller
{

    public $smarty;

    public function __construct() {

    }

    protected function render($template, array $data = array()) {

        $this->smarty->setLeftDelimiter('{%');
        $this->smarty->setRightDelimiter('%}');
        $this->smarty->setTemplateDir(__DIR__ . '/../views/');

        $this->smarty->assign($data);
        $this->smarty->display($template);
    }

}
