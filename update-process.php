<?php
include_once 'php_scripts/database2.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE playlist SET id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', comment='" . $_POST['comment'] . "', filetype='" . $_POST['filetype'] . "' ,url='" . $_POST['url'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM playlist WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<?php include("php_scripts/header.php"); ?> 
<title>Update Data</title>
</head>
<body>
	<a class="btn btn-primary linkStyle" href='index.php'>Return</a><br>
	<div class="container">
		<form name="frmUser" method="post" action="">
			<div><?php if(isset($message)) { echo $message; } ?>
			</div>
			<div style="padding:20px;">
			<a href="php_scripts/fetch_playlist.php">Update Data</a>
			</div>
			ID: <br>
			<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
			<input type="text" name="id"  value="<?php echo $row['id']; ?>">
			<br>
			 Name: <br>
			<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
			<br>
			Comment :<br>
			<input type="text" name="comment" class="txtField" value="<?php echo $row['comment']; ?>">
			<br>
			Filetype:<br>
			<input type="text" name="filetype" class="txtField" value="<?php echo $row['filetype']; ?>">
			<br>
			Image:<br>
			<input type="url" name="url" class="txtField" value="<?php echo $row['url']; ?>">
			<br>
			<input type="submit" name="submit" value="Submit" class="button">
			
			</form>
	</div>
	</body>
</html>