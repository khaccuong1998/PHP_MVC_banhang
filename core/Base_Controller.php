<?php 
    class Base_Controller extends Core_Controller
    {
        function __destruct()
        {
            $this->load_layout();
        }

        function load_layout(){
            
            ob_start();

            $this->view->show_view();

            $content = ob_get_contents();

            ob_end_clean();

            $this->layout->loader_layout(["content"=>$content]);
        }
    }