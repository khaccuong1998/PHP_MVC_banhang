<?php

    class Home_Controller extends Base_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->model->loader_model("Home");
        }

        function index()
        {
            $this->model->Home->show();

            // set layout
            $this->view->loader_view("Home/index");
        }
    }