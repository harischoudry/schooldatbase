<?php 	require("connection1.php"); 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>View Students</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body >
	<center>
	<h1><i><u>Student Data</u></i></h1>
	<br>

<center>
                   
  <img  style="opacity: 1 " src="1.png"  class="img-responsive" alt="Cinque Terre" width="304" height="236"> 
  </center>
	<br>
	</center>
<table class="table table-bordered table-responsive table-hover table-striped ">
<thead>
	<tr>
    	
        <th> Name</th>
        <th>Address</th>
        <th>Email/th>
        <th>Number</th>
        <th>Salary</th>



        <th colspan="2" style="text-align:center;">Action</th>
    </tr>
	</thead>
    <tbody>
			<?php
			// database query to fetch all the data from the database	
			$result=mysqli_query($connection, "SELECT * FROM newdata");
			// we use while loop because we want to show all entries from the database to web page
			while($test = mysqli_fetch_array($result))
			{
				//request of id of every entry
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['Name']."</font></td>";
				echo"<td><font color='black'>" .$test['Father']."</font></td>";
				echo"<td><font color='black'>". $test['Age']. "</font></td>";
				echo"<td><font color='black'>". $test['DOB']. "</font></td>";
				echo"<td><font color='black'>". $test['Roll']. "</font></td>";
				echo"<td><font color='black'>". $test['BG']. "</font></td>";
				echo"<td> <a href ='Edit_Student.php?id=$id'><button class='btn btn-success'><span class='glyphicon glyphicon-edit'></span>Edit</button></a>";
				echo"<td> <a href ='Delete_Student.php?id=$id'><button class='btn btn-danger'><span class='glyphicon glyphicon-erase'></span>Delete</button></a>";
									
				echo "</tr>";
			}
			?>
  
       </tbody>
</table>
<br>
<h2><i><a href="Student_registration.php">Click here to Add Another Student</a></i></h2>
<br>
<br>

<table class="table table-bordered table-responsive table-hover table-striped align ">
	<tr>
		<td>
			<center>
<h1><a href="logout.php">Logout</a></h1>
</center>
</td>
</tr>
</table>

</body>
</html>
