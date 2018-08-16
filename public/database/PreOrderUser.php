<?php
include_once("DatabaseCredentials.php");
class PreOrderUser { 
    private $pdo;
    
    function __construct() {
       
        $servername = DB_SERVER_NAME;
        $dbname = DB_NAME;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        $this->pdo = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function __destruct() {
        unset($this->pdo);
    }
    
    function getPreOrderUserNumber(){
        $sql = "SELECT email FROM PreOrderUser";   
        $result = $this->pdo->query($sql);
        return $result->rowCount();
    }
    
    function insertPreOrderUser($email, $firstName, $lastName, $tshirtSize){
        try{
            $sql = "INSERT INTO PreOrderUser (email, firstName, lastName, shirtSize)
            VALUES ('$email', '$firstName', '$lastName', '$tshirtSize');";   
            $result = $this->pdo->query($sql);
            return $result;
        }catch(Exception $e){
            return false;
        }
       
    }

    function sendConfirmEmail($email, $firstName){
        $to = $email;
        $subject = 'DugoShop | Your pre-order is submitter correctly!';
        $message = '<h1>Thank you, ' . $firstName .'</h1>
        <p>from now you know you are the object of respect and pride of the dugo.
        If we ever reach the quota of 50 thousand pre-ordered t-shirts you will be 
        contacted and you will know everything you need to make sure that it is yours.<br></p>
        <p>Greetings</p>
        <p>Dugo</p>';
        $headers = 'From: dugoshop@dughettidanilo.com' . "\r\n" .
                    'Reply-To: dugoshop@dughettidanilo.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
    }
}

?>