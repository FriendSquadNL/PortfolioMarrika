<!DOCTYPE html>
<html>
<head>
	<title>Hack this site bro</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="style.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper fadeInDown">
	  <div id="formContent">
		<!-- Tabs Titles -->

		<!-- Icon -->
		<div class="fadeIn first">
		  <img src="https://i.kym-cdn.com/entries/icons/original/000/023/419/nerd_smoking.JPG" id="icon" alt="User Icon" />
		</div>

		<!-- Login Form -->
		<form action="process.php">
		  <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
		  <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
		  <input type="submit" class="fadeIn fourth" value="Log In">
		</form>

		<!-- Remind Passowrd -->
		<div id="formFooter">
		  <a class="underlineHover" href="process.php?err=1">Forgot Password?</a>
		</div>

	  </div>
	</div>
</body>
</html>