<?php  

require "dbconnection.class.php";
$dbconnect = new dbconnection();

$producttype = $_GET['type'];

$sql = "SELECT * FROM product WHERE product_groep = $producttype";
$query = $dbconnect -> prepare($sql);
$query -> execute() ;
$products = $query -> fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($products);
// echo "</pre>";

for ($x = 0; $x < count($products); $x++) {

  if ($x == 0) {
    echo "<div class ='container'>
      <div class = 'row row-cols-4'>";
  }

  echo 
    "<div class ='container'> ;
    <div class = 'row row-cols-4'>;
    <div class='projectbox'>
    <a href='#' class='linkbox'>
    <img class='img' src='{$products[$x]['product_afb']}' alt='' />
    </a>
    <p>
    {$products[$x]['product_naam']}
    <br> <br>
    Price without btw: €{$products[$x]['product_prijs']}
    <br>
    Price with btw: €{$products[$x]['product_prijs']}*121";
} 
  
       
?>