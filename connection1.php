<?php
$connection = mysqli_connect("localhost", "root", "", "Project");
if(!$connection){
	die("Database connection failed".mysqli_connect_error());
	}


?>