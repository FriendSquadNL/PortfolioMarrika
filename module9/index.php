<?php
// $naam = "Marrika Mol is een student";

// require("header.php");
// $active = 'home';
@include "header.php";

// $categorie = ;
// $dbconnect = new dbconnection();
// $sql = "SELECT * FROM categorie WHERE categorie_ID = $categorie";
// $query = $dbconnect -> prepare($sql);
// $query -> execute();
// $homepage = $query -> fetchAll(PDO::FETCH_ASSOC);

// echo $naam 
?> 

<body>
<section class="projectboxrow-home">
<?php 
  $product = array(
  array("img/GoodTimesWithScar.png","GoodTimesWithScar"),
  array("img/Grian.png","Grian"),
  array("img/Mumbo.png","Mumbo") );
  ?>


    <!-- 1 -->
    <div class="projectbox-home">
      <a href="forloop.php?type=1" class="linkbox">
        <img class="img" src="<?php echo $product[0][0] ?>" alt="" />
      </a>
      <p class="homepage">
        <br>
        <?php echo $product[0][1] ?>
      </p>
    </div>

    <!-- 2 -->
    <div class="projectbox-home">
      <a href="forloop.php?type=2" class="linkbox">
        <img class="img" src="<?php echo $product[1][0] ?>" alt="" />
      </a>
      <p class="homepage">
        <br>
      <?php echo $product[1][1] ?>
      </p>
    </div>

    <!-- 3 -->
    <div class="projectbox-home">
      <a href="forloop.php?type=3" class="linkbox">
        <img class="img" src="<?php echo $product[2][0] ?>" alt="" />
      </a>
      <p class="homepage">
        <br>
        <?php echo $product[2][1] ?>
      </p>


    <!-- </div><div class="projectbox-home">
      <a href="copy_index.php" class="linkbox">
        <img src="img/marvellogo.png" alt="" />
      </a>
      <p>
      test
      </p>
    </div> -->
  </section>
</body>
</html>

<!-- <?php 
  // $product = array(
  // array("img/GoodTimesWithScar.png","GoodTimesWithScar"),
  // array("img/Grian.png","Grian"),
  // array("img/Mumbo.png","Mumbo") );
  ?>


    1
    <div class="projectbox-home">
      <a href="forloop.php?type=1" class="linkbox">
        <img class="img" src="<?php echo $product[0][0] ?>" alt="" />
      </a>
      <p class="homepage">
        <br>
        <?php echo $product[0][1] ?>
      </p>
    </div>

    2
    <div class="projectbox-home">
      <a href="forloop.php?type=2" class="linkbox">
        <img class="img" src="<?php echo $product[1][0] ?>" alt="" />
      </a>
      <p class="homepage">
        <br>
      <?php echo $product[1][1] ?>
      </p>
    </div>

    3
    <div class="projectbox-home">
      <a href="forloop.php?type=3" class="linkbox">
        <img class="img" src="<?php echo $product[2][0] ?>" alt="" />
      </a>
      <p class="homepage">
        <br>
        <?php echo $product[2][1] ?>
      </p> -->


    <!-- </div><div class="projectbox-home">
      <a href="copy_index.php" class="linkbox">
        <img src="img/marvellogo.png" alt="" />
      </a>
      <p>
      test
      </p>
    </div> -->
  <!-- </section> -->