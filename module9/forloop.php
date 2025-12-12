<!DOCTYPE html>
<head>
    <?php
@include "header.php";

$dbconnect = new dbconnection();

$producttype = $_GET['type'];

$sql = "SELECT * FROM product WHERE product_groep = $producttype";
$query = $dbconnect -> prepare($sql);
$query -> execute();
$products = $query -> fetchAll(PDO::FETCH_ASSOC);
$active = '$products';
    
    
?>
</head>

<body>
<?php  

//  echo "<pre>";forloop.php
//  print_r($products[0]["product_prijs"]+5);
//   echo "</pre>";

 
for ($x = 0; $x < count($products); $x++) {
  $productsbtw = $products[$x]['product_prijs']/100*121;
  $productsbtw = number_format($productsbtw, 2);

  if ($x == 0) {
  echo 
    "<div class='products'>";}
  echo 
    "<div class='products projects'>
      <a href='#' class='linkbox'>
        <img class='img' src='{$products[$x]['product_afb']}' alt='' />
      </a>
      <p>
        {$products[$x]['product_naam']}
        <br> <br>
        Price without btw: €{$products[$x]['product_prijs']}
        <br>
        Price with btw: € $productsbtw
      </p>
    </div>";
    
}       
?>

</body>
</html>

 <!-- Price with btw: €'$productsbtw' -->