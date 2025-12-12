<!DOCTYPE html>
<html lang="en">
<head>
  <title> Marrika Mol </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="../css/style.css">   

</head>

  <body>
      <!-- Top Navigation Menu -->
    <nav>
      <ul>
        <li> <a href="../index.php" class="<?= ($active == 'index' ? 'active' : 'link') ?>"  >Marrika Mol</a></li>
      </ul>

      <ul class="content__item">
        <li> <a href="../projects.php" class="<?= ($active == 'projects' ? 'active' : 'link') ?> ">Projects</a> </li>
        <li> <a href="../CV.php" class="<?= ($active == 'CV' ? 'active' : 'link') ?>">CV</a> </li>
      </ul>
    </nav> 
    <div class="app">
        <h1>Are you stupid?</h1>

        <div class="buttongroup">
            <button onclick="parent.location='yes.php'" class="button--yes" >Yes</button>
            <button class="button--no">No</button>
        </div>
    </div>
<script scr="button.js">
    const b = document.querySelector('button.button--no')
    b.addEventListener("mouseover", moveHover)

    function moveHover(){
        const i=Math.floor(Math.random()*500)+1;
        const j=Math.floor(Math.random()*500)+1;


        b.style.left=i+"px"
        b.style.top=j+"px"
    }
</script>
</body>
</html>