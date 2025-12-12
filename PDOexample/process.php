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

		<div class="wrapper fadeInDown">
			<?php
			if(!empty($_GET["err"])){
				die("Hack die shizzle gewoon, noob!");
			}

			$servername = "localhost";
			$username = "root";
			$password = "";

			//probeer te connecten met de database
			try {
				$conn = new PDO("mysql:host=$servername;dbname=PDOexample", $username, $password);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e)
			{
				die("Connection failed: " . $e->getMessage());
			}

			if ($_SERVER['REQUEST_METHOD'] === 'GET') {
				$username = $_GET['username'];
				$password = $_GET['password'];
			}


			$sql = "SELECT * FROM user WHERE name = '$username' AND password='$password'";

			$stmt = $conn->prepare($sql);
			$stmt-> execute();
			$user = $stmt->fetch();
			
			if($user){
				echo "<p class='fadeIn second'>Je bent ingelogd als: ".  $user['name'] ."</p>";
			}
			else{
				echo "<p class='fadeIn second'>Je bent niet ingelogd als iemand</p>";
			}

			echo "<p class='fadeIn third'>Je SQL query is: ".$sql."</p>";

			?>
		</div>
	</div>
</div>
</body>
</html>