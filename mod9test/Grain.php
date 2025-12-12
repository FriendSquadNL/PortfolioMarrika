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
      $afburl1 =  "img/Barge.png";
      $name1 = "
      The barge out Hermitcraft 7!";
      ?>


    <div class="projectbox">
      <a href="#" class="linkbox">
        <img src="<?php echo $afburl1 ?>" alt="" />
      </a>
      <p>
      <?php echo $name1 ?>
      </p>
    </div>

<!-- 2 -->
    <?php
      $afburl2 =  "img/PeskyBird.png";
      $name2 = "PeskyBird!";
    ?>


    <div class="projectbox">
      <a href="#" class="linkbox">
        <img src="<?php echo $afburl2 ?>" alt="" />
      </a>
      <p>
      <?php echo $name2 ?>
      </p>
    </div>
     
<!-- 3 -->
    <?php
      $afburl3 =  "img/Grain.png";
      $name3 = "
      Grian's bread, grain";
    ?>


    <div class="projectbox">
      <a href="#" class="linkbox">
        <img src="<?php echo $afburl3 ?>" alt="" />
      </a>
      <p>
        <?php echo $name3 ?>
      </p>
    </div>

    <!-- 4 -->
    <?php
      $afburl4 =  "img/Grian.png";
      $name4 = "
      Grian's skin with his jumper!"
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