<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>HermitsFriendsshop "Welcome by Hermits and Friends"</title>
    <?php @include "dbconnection.class.php"; ?>
</head>
<body>
<nav>
      <ul>
        <li> <a href="index.php" class="<?= ($active == 'home' ? 'active' : 'link') ?>" >Home</a></li>
      </ul>

      <ul class="content__item">
        <li> <a href="forloop.php?type=1" class="<?= ($active == 'GoodTimesWithScar' ? 'active' : 'link') ?>">GoodTimesWithScar</a> </li>
        <li> <a href="forloop.php?type=2" class="<?= ($active == 'Grian' ? 'active' : 'link') ?>">Grian</a> </li>
        <li> <a href="forloop.php?type=3" class="<?= ($active == 'Mumbo' ? 'active' : 'link') ?>">Mumbo</a> </li>
        <!-- <li> <a href="Marvel.php" class="link">Marvel</a> </li> -->
      </ul>
</nav> 
</body>
</html>