<?php
	include("php_scripts/database.php");
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Media Organiser</title>
	<!-- include our style -->
	<?php include("php_scripts/header.php"); ?> 
</head>
<body>
	<div class="container">
		<h1>Media Organiser</h1>
		<div class="form-group">
			<form  method='post' action="index.php" enctype="multipart/form-data">
			<!-- we will be sending data to database, hence the use of POST -->
			<label for="myfile">Enter Media File:</label>
			<input class="form-control" type="file" name="file">
			<label for="myfile">Enter Image File:</label>
			<input class="form-control" type="file" name="filetype">
			<input class="form-control-text" type="text" name="comment" placeholder="enter your comment" required>
			<input class="form-control-text" type="text" name="Category" placeholder="Category" required>
			<!-- required, basic validation method -->
			<input class="form-control btn btn-primary" type="submit" name="upload" value="Upload">
			<div></div>
		</form>
		<!-- Create table of media files -->
		<?php include("php_scripts/fetch_playlist.php"); ?> 
		
	</div>
	

</body>
</html>