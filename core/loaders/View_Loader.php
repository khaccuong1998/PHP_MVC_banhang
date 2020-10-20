<?php
    class View_Loader
    {
        protected $contents = []; // mảng chứa các view con

        function loader_view($view_name, $data_view = [])
        {
            extract($data_view);

            $view_path = APP_PATH."/views/".$view_name.".php";

            if(!file_exists($view_path))
            {
                "View not found";
            }

            ob_start();

            require $view_path;

            $this->contents[] = ob_get_contents();

            ob_end_clean();

        }

        // duyệt mảng content và hiển thị từng view
        function show_view()
        {
            foreach ($this->contents as $content)
            {
                echo $content;
            }
        }
    }