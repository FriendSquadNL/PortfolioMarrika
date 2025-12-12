<!-- TEST WANT JA WERKT NIET -->
<?php include("header.php");?>

<?php

require "dbconnection.class.php";
$dbconnect = new dbconnection();
$sql = "SELECT * FROM product WHERE product_groep = '1'";
$query = $dbconnect -> prepare($sql);
$query -> execute() ;
$recset = $query -> fetchAll(PDO::FETCH_ASSOC);

?>

<?php
require "forloop.php"
?>