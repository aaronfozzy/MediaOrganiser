<?php
$url='localhost';
$username='root';
$password='Uktriathlon1';
$conn=mysqli_connect($url,$username,$password,"media");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>