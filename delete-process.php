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
include_once 'php_scripts/database.php';
$sql = "DELETE FROM playlist WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
	echo "Record deleted successfully";
} else {
	echo "Error deleting record " . mysqli_error($conn);
}
mysqli_close($conn);
?>

</body>
</html>