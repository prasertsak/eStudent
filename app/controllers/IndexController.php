<?php

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->name="ประเสริฐศักดิ์";
        $this->view->name_array=array("name 1","name 2","name 3");
    }

}