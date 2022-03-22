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
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Uktriathlon1", "media");
 
// Check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $id = $_GET['id'];
// Attempt delete query execution
$sql = "DELETE FROM playlist WHERE id='3'";
if(mysqli_query($link, $sql)){
	echo "Records were deleted successfully.";
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
</html>