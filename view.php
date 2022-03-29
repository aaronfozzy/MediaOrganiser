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
			$url = $row['url'];
			$image = $row['image'];
			echo "<br><h2>Showing Media</h2><br>";
			echo "<div class='media'>";
			echo "<embed src='$url' width='400' height='300'><br>";
			echo "</div>";
			echo "<div class='media-2'>";
			echo "<embed src='$image' width='400' height='300'><br>"; // Add edit tag
			echo "</div>";
		}
	} else {
		echo "<p style='color:red;'>Failed to play media file></p>";
	}
		echo "</div>";
	?>
</body>
</html>