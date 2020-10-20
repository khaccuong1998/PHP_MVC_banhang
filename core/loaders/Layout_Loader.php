<?php

class Layout_Loader
{
    protected $layout_name = "default";

    // ngoài layout default ta có thể layot khác
    function setlayout($layout_name = "")
    {
        $this->layout_name = $layout_name;
    }

    // hàm loader_layout dùng bên base_controller
    function loader_layout($view = [])
    {
        extract($view);

        // load layout
        $layout_path = APP_PATH . "/views/layout/{$this->layout_name}.php";

        if (!file_exists($layout_path)) {
            echo "Layout file not found";
        }

        require $layout_path;
    }
}
