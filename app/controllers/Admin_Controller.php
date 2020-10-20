<?php

class Admin_Controller extends Base_Controller
{
   function __construct() {
    parent::__construct();
    $this->layout->setlayout("admin");

   }
    function index() {
    }
    function qldanhmuc(){
        $this->view->loader_view("admin/qldanhmuc");
    }

}


?>