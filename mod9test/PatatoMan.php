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
$afburl1 =  "img/GrumBot.png";
$name1 = "GrumBot out Hermitcraft 7!"
?>

    <div class="projectbox">
      <a href="#" class="linkbox">
        <img src="<?= $afburl1 ?>" alt="" />
      </a>
      <p>
        <?= $name1 ?>
      </p>
    </div>

    <!-- 2 -->
    <?php
      $afburl2 =  "img/GrumbotJR.png";
      $name2 = "GrumBotJR out Hermitcraft 7!"
    ?>

    <div class="projectbox">
      <a href="#" class="linkbox">
        <img src="<?php echo $afburl2 ?>" alt="" />
      </a>
      <p> <?php echo $name2 ?> </p>
    </div>

    <!-- 3 -->
    <?php
      $afburl3 =  "img/MumboMustache.png";
      $name3 = "Buy the mustache off MumboJumbo!"
    ?>

    <div class="projectbox">
      <a href="#" class="linkbox">
        <img src="<?php echo $afburl3 ?>" alt="" />
      </a>
      <p>
      <?php echo $name3?>
      </p>
    </div>

    <!-- 4 -->
    <?php
      $afburl4 =  "img/PatatoMan.png";
      $name4 = "Skin of PatatoMumbo from Hermitcraft 8!"
    ?>

    <div class="projectbox">
      <a href="#" class="linkbox">
        <img src="<?php echo $afburl4 ?>" alt="" />
      </a>
      <p>
        <?php echo $name4 ?>
      </p>
    </div>
  </section>
</body>
</html>