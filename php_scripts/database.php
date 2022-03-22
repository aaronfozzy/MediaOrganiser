<?php 

	$dbConnection = mysqli_connect('localhost', 'root', 'Uktriathlon1', 'media');
	// where mysqli_connect('location', 'username', 'password', 'my_database');
	if(isset($_POST['upload'])) { //if form is submitted from 'upload'
		$file_name = $_FILES['file']['name']; // Array(file(name=>'name_of_file', ...))
		$temp_name = $_FILES['file']['tmp_name'];
		$file_type = $_FILES['file']['type'];
		$file_comment = $_POST['comment']; // get comment from user
		$directory = "./upload/PlayList/";

		if(!is_dir($directory)) { 
			mkdir($directory, 0777, true); //create if this does not exist
		}
		 //create a directory in this file path
		move_uploaded_file($temp_name, "upload/PlayList/$file_name"); //move the file from the temp to specified directory
		$file_url = "http://localhost:8888/upload/PlayList/$file_name";

		$query = "INSERT INTO playlist(name, filetype, comment, url)"; //Add data in playlist rows "name" , "filetype" and "url"
		$query .= "VALUES ('$file_name', '$file_type', '$file_comment', '$file_url')"; //Concatenate the values of $file_name , $file_type and $file_url values to each row.
		
		mysqli_query($dbConnection, $query); //store each media file in the playlist folder and to the database "media"
		
		echo "<br>"."<p class='status'><strong>$file_name</strong> has been uploaded!</p>";
		
	}


?>
