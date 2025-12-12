<?php

// class dbconnection extends PDO {

//     private $host = 'localhost';
//     private $dbname = 'forum';
//     private $user = 'root';
//     private $pass = '';
//     public function __construct () {
//         parent::__construct('mysql:host ='.$this->host.'; dbname='.$this->dbname.'; charset=utf8', $this->user, $this->pass);
//         $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//     }

// }
?>

<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_NAME', 'forum');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>