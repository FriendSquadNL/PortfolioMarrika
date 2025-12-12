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
      $name1 = "
      ElvenCookies 
      <br>
      made by: GoodTimesWithScar"
    ?>

    <div class="projectbox">
      <a href="#" class="linkbox">
        <img src="<?php echo $afburl1 ?>" alt="" />
      </a>
      <p>
        <?php echo $afburl1 ?>
      </p>
    </div>

    <!-- 2 -->
    <?php
      $afburl2 =  "img/ElvenCookie_.png";
      $name2 = "
      <p>
      Elven Surprise
      <br>
        made by: GoodTimesWithScar
      </p>!"
    ?>

    <div class="projectbox">
      <a href="#" class="linkbox">
        <img src="<?php echo $afburl2 ?>" alt="" />
      </a>
      <p>
        <?php echo $afburl2 ?>
      </p>
    </div>

    <!-- 3 -->
    <?php
      $afburl3 =  "img/Elven_Cookie.png";
      $name3 = "
      ElvenCookies 
        <br>
        made by: GoodTimesWithScar"
    ?>

    <div class="projectbox">
      <a href="#" class="linkbox">
        <img src="<?php echo $afburl3 ?>" alt="" />
      </a>
      <p>
        <?php echo $afburl3 ?>
      </p>
    </div>
  </section>
</body>

</html>