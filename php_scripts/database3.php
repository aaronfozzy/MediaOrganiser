<?php
   $servername='localhost';
   $username='root';
   $password='Uktriathlon1';
   $dbname = "media";
   $con=mysqli_connect($servername,$username,$password,"$dbname");
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }
?>