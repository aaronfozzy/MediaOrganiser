<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View</title>
	<?php 
	include("php_scripts/header.php"); 
	?>
</head>
<body>
<a class="btn btn-primary linkStyle" href='index.php'>Return</a><br>
<?php
echo "<div class='container'>";
$servername = "localhost";
$username = "root";
$password = "Uktriathlon1";
$dbname = "media";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM playlist WHERE id=5";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>