<?php

class Core_Controller
{
    protected $model;
    protected $view;
    protected $layout;

    function __construct()
    {
        require BASE_PATH . "/core/loaders/Layout_Loader.php";
        $this->layout = new Layout_Loader;

        require BASE_PATH . "/core/loaders/Model_Loader.php";
        $this->model = new Model_Loader;

        require BASE_PATH . "/core/loaders/View_Loader.php";
        $this->view = new View_Loader;
    }
}
