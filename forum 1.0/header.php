<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
  
  <?php  require "dbconnection.class.php"; 
  ?>

    <nav>
        <ul>
            <li class="<?php if($currentPage =='home'){echo 'active';}?>"> <a href="index.php" class="link" >Home</a></li>
        </ul>
    
        <ul class="content__item">
            <li class="<?php if($currentPage =='#'){echo 'active';}?>"> <a href="#" class="link ">#</a> </li>
            <li class="<?php if($currentPage =='login'){echo 'active';}?>"> <a href="login2.php" class="link">login</a> </li>
            <li class="<?php if($currentPage =='register'){echo 'active';}?>"> <a href="register3.php" class="link">register</a> </li>
        </ul>
    </nav>

</head>
    <body>
        <!-- <nav>
            <ul>
                <li class="<?php if($currentPage =='home'){echo 'active';}?>"> <a href="index.php" class="link" >Home</a></li>
            </ul>
    
            <ul class="content__item">
                <li class="<?php if($currentPage =='#'){echo 'active';}?>"> <a href="#" class="link ">#</a> </li>
                <li class="<?php if($currentPage =='login'){echo 'active';}?>"> <a href="login.php" class="link">login</a> </li>
                <li class="<?php if($currentPage =='register'){echo 'active';}?>"> <a href="register.php" class="link">register</a> </li>
            </ul>
        </nav> -->

    </body>
</html>