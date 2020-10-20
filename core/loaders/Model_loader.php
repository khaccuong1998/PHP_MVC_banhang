<?php   
    class Model_Loader
    {
        function loader_model($model_name)
        {
            $model_fullname = $model_name."_Model";
            $model_path = APP_PATH."/models/".$model_fullname.".php";
            
            if(!file_exists($model_path))
            {
                echo "Model not found";
            }

            require $model_path;

            $this->$model_name = new $model_fullname;
        }
    }