<?php
include_once("DatabaseCredentials.php");
class PreOrderUser { 
    private $pdo;
    
    
    function __construct() {
        $servername = DB_SERVER_NAME;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        $this->$pdo = new PDO("mysql:host=$servername;port=3306;dbname=dugoshop_db", $username, $password);
        $this->$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function __destruct() {
        unset($this->$pdo);
    }
    
    function getPreOrderUserNumber(){
        $sql = "SELECT email FROM PreOrderUser";   
        $result = $this->$pdo->query($sql);
        return $result->rowCount();
    }
}

?>