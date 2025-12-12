<?php

// require "dbconnection.class.php";
// $dbconnect = new dbconnection();
// $sql = "SELECT * FROM product";
// $query = $dbconnect -> prepare($sql);
// $query -> execute() ;
// $recset = $query -> fetchAll(PDO::FETCH_ASSOC);




 include("header.php");


//db connectie wordt aangemaakt
require "dbconnection.class.php";
$dbconnect = new dbconnection();

//haalt iets op uit db
$sql = "SELECT * FROM product WHERE product_groep = '1'";
$query = $dbconnect -> prepare($sql);
$query -> execute();
//zet opgehaalde data in variabele
$products = $query -> fetchAll(PDO::FETCH_ASSOC);



  // require "forloop.php"
  
  
 echo "<pre>";
 print_r($products);
echo "</pre>";

for ($x = 0; $x < count($products); $x++) {
  if ($x == 0) {
    echo "<div class ='container'>
      <div class = 'row row-cols-4'>";
  }
  echo "
    <div class ='container'> 
      <div class = 'row row-cols-4'>";
  
  
      echo "<div class='projectbox'>
        <a href='#' class='linkbox'>
          <img class='img' src='{$products[$x]["product_afb"]}' alt='' />
        </a>
        <p>
          {$products[$x]["product_prijs"]}
          <br> <br>
          Price without btw. €{$products[$x]["product_prijs"]}
          <br>
          Price with btw: €". $products[$x] . $products[$x]["product_prijs"];
        echo "<br> <br>";
          if ($products[$x]["product_voorraad"] == 0) {
      echo "Niet op voorraad";} 
    elseif ($products[$x]["product_voorraad"] < 15) {
      echo "Weinig op voorraad";} 
    else {
      echo "Ruim op voorraad";}
        echo "</p>
      </div>";
}

?> 

  
  <body>
</body>

</html>


<?php
echo  "<img class='img' src='" . $products[$x]["product_afb"] . "' />";


// echo $recset[0]["product_naam"];

// foreach ($recset as $product) {echo $product["product_ID"];}; 
// 
// //maak de connectie beschikbaar in dit bestand
// require "dbconnection.class.php";

// //maak een nieuwe connectie aan in de variabele $dbconnect
// $dbconnect = new dbconnection();

// //op de volgende regel bouw je een sql-query (leren we in module 10); als je alle producten uit de tabel met de naam ‘product’ wilt trekken heb je de volgende query nodig
// $sql = "SELECT * FROM product";

// //hier zet je de query klaar, ‘prepare()’ is een functie binnen PDO die je kunt gebruiken bij de variabele $dbconnect
// $query = $dbconnect -> prepare($sql);

// //hier voer je de database bevraging uit, ‘execute()’ is een functie binnen PDO die je los kunt laten op de variabele $query
// $query -> execute() ;

// //hier sla je alle records die je uit de database opgevraagd hebt, op in de array $recset ('recset' is een afkorting voor records-set - een andere naam mag ook);
// //‘fetchAll()’ is een functie binnen PDO en betekent letterlijk: trek (fetch) alles (all) uit de database op basis van de query;
// //$recset is een array met gevonden records uit de database
// $recset = $query -> fetchAll(PDO::FETCH_ASSOC);

// //om te zien wat je nu precies uit de database gehaald hebt:
// echo "<pre>";
// print_r($recset);
// echo "</pre>";

// echo $recset[0]["product_naam"];

// foreach ($recset as $product) {echo $product["product_ID"];}; 
?> 