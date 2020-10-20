<?php 

    class Core_Model
    {
        protected $db;

        function __construct()
        {
            $this->connect();
        }

        function connect()
        {
            $database_path = BASE_PATH."/config/database.php";

            if(!file_exists($database_path))
            {
                "Database config not found";
            }

            $config = require $database_path;


            $dbname = $config['dbname'];
            $host = $config['host'];
            $username = $config['user'];
            $password = $config['password'];

            // Create connection
            $this->db = new mysqli($host, $username, $password, $dbname) or die("Loi");

        }
    }