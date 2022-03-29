<?php
include_once 'php_scripts/database2.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE playlist SET id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', comment='" . $_POST['comment'] . "', filetype='" . $_POST['filetype'] . "' ,url='" . $_POST['url'] . "', Category='" . $_POST['Category'] . "' WHERE id='" . $_POST['id'] . "'");
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
		<div class="form-group">
		<form name="frmUser" method="post" action="">
			<div><?php if(isset($message)) { echo $message; } ?>
			</div>
			<div style="padding:20px;">
			<h2>Update Data</h2>
			</div>
			ID: <br>
			<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
			<input class="form-control" type="text" name="id"  value="<?php echo $row['id']; ?>">
			<br>
			 Name: <br>
			<input class="form-control" type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
			<br>
			Comment :<br>
			<input class="form-control" type="text" name="comment" class="txtField" value="<?php echo $row['comment']; ?>">
			<br>
			Category :<br>
			<input class="form-control" type="text" name="Category" class="txtField" value="<?php echo $row['Category']; ?>">
			<br>
			Filetype:<br>
			<input class="form-control" type="text" name="filetype" class="txtField" value="<?php echo $row['filetype']; ?>">
			<br>
			Media:<br>
			<input class="form-control" type="url" name="url" class="txtField" value="<?php echo $row['url']; ?>">
			<br>
			Image:<br>
			<input class="form-control" type="url" name="url" class="txtField" value="<?php echo $row['image']; ?>">
			<br>
			<input class="form-control btn btn-primary" type="submit" name="submit" value="Submit" class="button">
			
			</form>
		</div>
	</div>
	</body>
</html>