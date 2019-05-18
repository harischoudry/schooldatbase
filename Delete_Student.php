<?php
session_start();
require("connection1.php"); ?>

<?php
$id =$_REQUEST['id']; //we request the id of every individual database values
	
// delete query
mysqli_query($connection, "DELETE FROM newdata WHERE id = '$id'") or die(mysqli_error()); // header function is use to redirect the page to another file location 	
header("Location: view_students.php");
exit(); 
//close the database connection
mysqli_close($connection1);
?>
<h1><a href="logout.php">Logout</a></h1>
<style>
		body {
   
    
        display:table;  margin: auto; border: solid black 2px;
    }
    table {
        border-collapse: collapse;
        }
	</style>