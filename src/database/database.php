<?php
ini_set('display_errors', 1);
class Database {

    public function __construct() {
        $this->host = "localhost";
        $this->dbname = "AJAX_signup";
        $this->username = "root";
        $this->password = "";
        $this->port = 3306;
    }
    
    function getConnection () {
        $connection = null;
        try {
            $connection = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname, $this->username, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo "Connection Error:" . $exception->getMessage();
        }

        return $connection;
    }
}