<?php 	//database connection
	$connect=mysql_connect("localhost","root","") or die ("cloudn't connect with database");
	$db=mysql_select_db("dream destination",$connect) or die ("cloudn't select your database");
?>
