<?php
session_start();
require("connection1.php"); //link of database connection 
?>
<!doctype html>
<html>
	<head>  
    	<title>Edit Students</title>
        <link href="../images/icon.png" type="image/gif" rel="shortcut icon" />
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<style>
		body {
   
    
        display:table;  margin: auto; border: solid black 2px;
    }
    table {
        border-collapse: collapse;
        }
	</style>
<body>
<?php
$id =$_REQUEST['id']; //we request the id of every individual database values
// query to fetch all the data fromm database
$result = mysqli_query($connection, "SELECT * FROM newdata WHERE id  = '$id'");
//then store these values into an array
$test = mysqli_fetch_array($result);

				$name=$test['Name'];				
				$father=$test['Father'];
				$age=$test['Age'];
				$dob=$test['DOB'];
				$roll=$test['Roll'];
				$bg=$test['BG'];

	//if save button is pressed then update the values			
if(isset($_POST['save']))
{	
	$name_save = $_POST['Name'];
	$father_save = $_POST['Father'];
	$age_save=$_POST['Age'];
	$dob_save=$_POST['DOB'];
	$roll_save=$_POST['Roll'];
	$bg_save=$test_save=$_POST['BG'];
	//update query
	mysqli_query($connection, "UPDATE newdata SET name ='$name_save', father ='$father_save',age ='$age_save', dob ='$dob_save',roll ='$roll_save',bg ='$bg_save' WHERE id = '$id'")
				or die(mysqli_error()); 
	echo "Saved!";
	
	header("Location: view_students.php");
	exit();			
}
?>

<h1 style="margin-left:50px;">Edit Student Information</h1>
<form class="form-horizontal" method="post">

	<input type="text" name="Name" class="form-control" value="<?php echo $name ?>"/>
	<input type="text" name="Father" class="form-control" value="<?php echo $father ?>"/>
	<input type="age" name="Age" class="form-control" value="<?php echo $age ?>"/>
	<input type="Birth" name="DOB" class="form-control" value="<?php echo $dob ?>"/>
	<input type="text" name="Roll" class="form-control" value="<?php echo $roll ?>"/>
	<input type="text" name="BG" class="form-control" value="<?php echo $bg ?>"/>
   	<button class="btn btn-success" type="submit" name="save">Save</button> 
</form>
<center>
<h1><a href="logout.php">Logout</a></h1>
</center>
</body>
</html>