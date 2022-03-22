<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View</title>
	<?php 
	include("php_scripts/header.php"); 

	?>
	<?php 


	?>
</head>
<body>
	<a class="btn btn-primary linkStyle" href='index.php'>Return</a><br>
	<?php 
	include('php_scripts/database.php'); //code referring to database connection
	echo "<div class='container'>";
	if(isset($_GET['id'])) { //if table id is set
		$id = $_GET['id'];
		$get_query = mysqli_query($dbConnection, "SELECT * FROM `playlist` WHERE id='$id'"); //select each video by there ID
		while($row = mysqli_fetch_assoc($get_query)) { //loop through associative array and return media to be played
			$name = $row['name'];
			$url = $row['url']; //get the url form the database and echo out in a media tag <embed>
			echo "<br><h2>Playing ". $name."</h2><br>";

			echo "<embed src='$url' height='480' width='720'><br><a class='btn btn-primary' href='php_scripts/change.php?=$id'>Change Name</a><a class='btn btn-primary' href='delete-process.php?=$id'>Remove</a>"; // Add edit tag
		}
	} else {
		echo "<p style='color:red;'>Failed to play media file></p>";
	}
		echo "</div>";
	?>
</body>
</html>