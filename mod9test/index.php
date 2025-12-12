<?php
// $naam = "Marrika Mol is best lief";
?>

<!DOCTYPE html>
<html lang="en">
<?php require("header.php") ?>
  <!-- <?php echo $naam ?>  -->

<body>
<section class="projectboxrow">

    <!-- 1 -->
    <?php
      $afburl1 =  "img/ElvenCookie.png";
      $name1 = "ElvenCookies from GoodTimesWithScar"
    ?>

    <div class="projectbox">
      <a href="ElvenCookies.php" class="linkbox">
        <img src="<?php echo $afburl1 ?>" alt="" />
      </a>
      <p>
        <?php echo $name1 ?>
      </p>
    </div>

    <!-- 2 -->
    <?php
      $afburl2 =  "img/Grain.png";
      $name2 = "Bread or grain";
    ?>

    <div class="projectbox">
      <a href="Grain.php" class="linkbox">
        <img src="<?php echo $afburl2 ?>" alt="" />
      </a>
      <p>
      <?php echo $name2 ?>
      </p>
    </div>

    <!-- 3 -->
    <?php
      $afburl3 =  "img/PatatoMan.png";
      $name3 = "PatatoMan"
    ?>

    <div class="projectbox">
      <a href="PatatoMan.php" class="linkbox">
        <img src="<?php echo $afburl3 ?>" alt="" />
      </a>
      <p>
        <?php echo $name3 ?>
      </p>

<!-- 4
<?php
      $afburl4 =  "img/marvellogo.png";
      $name4 = "
      Marvel"
?>

    </div><div class="projectbox">
      <a href="marvel.php" class="linkbox">
        <img src="img/marvellogo.png" alt="" />
      </a>
      <p>
      <?php echo $name4 ?>
      </p>
    </div> -->
  </section>
</body>
</html>