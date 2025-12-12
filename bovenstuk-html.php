<!DOCTYPE html>
<html>

<head>
  <title> Marrika Mol </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">   
  <link rel="stylesheet" href="css/media.css">   
  <link rel="stylesheet" href="css/styles.css">   

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

  <body>
      <!-- Top Navigation Menu -->
    <nav>
      <ul>
        <li> <a href="index.php" class="<?= ($active == 'index' ? 'active' : 'link') ?>"  >Marrika Mol</a></li>
      </ul>

      <ul class="content__item">
        <li> <a href="projects.php" class="<?= ($active == 'projects' ? 'active' : 'link') ?> ">Projects</a> </li>
        <li> <a href="CV.php" class="<?= ($active == 'CV' ? 'active' : 'link') ?>">CV</a> </li>
      </ul>
    </nav> 

    <div class="slideshow-container">
            <div class="mySlides fade">
                <img class="img" src="images/Netflix.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img class="img" src="images/starwars 3.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                
                <img class="img" src="images/marvel2.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                
                <img class="img" src="images/DC-Comics.png" style="width:100%"> 
            </div>

            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
    </div>