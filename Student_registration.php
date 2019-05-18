
<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>New Student Regisration</title>

  <script>
function validate(){  
var age=document.myform.age.value;  

  if (isNaN(age)){  
  document.getElementById("numloc").innerHTML="Enter Numeric value only";  
  return false;  
} 
  else{
    return true;
  }
  

}
  

</script> 
</head>

<style>

#ok{
  
text-shadow: -1px 0 maroon, 0 1.5px maroon, 1.5px 0 maroon, 0 -1px maroon;
  font-weight: bold;
  font-size: 50px;
  font-style: arial;
  font-family: 'Lobster Two',cursive;
  }
  body { 
    
        display:table;  margin: auto; border: solid black 2px;
    }
    table {
        border-collapse: collapse;

        
        }
}
</style>

<body >
<div class="container">
  <center>
    <h1 id="ok" >New Student Regisration</h1>
  </center>

<form name="myform" action="" method="POST" onsubmit="return validate()" >
  <div class="form-group">

<label style="font-size: 25px; color: maroon" >Name:</label>
      <input type="text" class="form-control" name="user" placeholder="Enter name"> <br>
    </div>
    <div class="form-group">
<label style="font-size: 25px; color: maroon">Father Name:</label>
      <input type="text" class="form-control" name="fname" placeholder="Enter Father name"> <br>
    </div>
    <div class="form-group">
<label style="font-size: 25px; color: maroon">Age:</label>
      <input type="Age" class="form-control" name="age" placeholder="Enter age"> <br><span id="numloc"></span><br/> 
    </div>
    <div class="form-group">
<label style="font-size: 25px; color: maroon">Date Of Birth:</label>
      <input type="Birth" class="form-control" name="dob" placeholder="Enter DOB"> <br> 
</div   <div class="form-group">
<label style="font-size: 25px; color: maroon">Roll Number:</label>
      <input type="text" class="form-control" name="roll" placeholder="Enter Roll Number"> <br>
</div>
   <div class="form-group">
<label style="font-size: 25px; color: maroon">&emsp;Blood Group:</label>
      &emsp;&emsp;<input type="text" class="form-control" name="bg" placeholder="Enter Blood Group"> &emsp;&emsp;<br>
</div>


&emsp;<input type="submit" value="Add Student" name="submit" />
<br>
<br>
<center>
<a href="view_students.php" target="_blank"><button style="height: 70px; width: 145px; color: black;" type="button" class="btn btn-primary">Show All Students</button></a></center>
<br>
<br>
</form>
</div>
<?php
session_start();
if(isset($_POST["submit"])){
// if our input fields are not empty then save data to database

if(!empty($_POST['user']) && !empty($_POST['fname']) && !empty($_POST['age'])&& !empty($_POST['dob'])&& !empty($_POST['roll'])&& !empty($_POST['bg'])) {
  $user=$_POST['user'];
  $fname=$_POST['fname'];
  $age=$_POST['age'];
  $dob=$_POST['dob'];
   $roll=$_POST['roll'];
    $bg=$_POST['bg'];
// connection of database file
  $con=mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('Project') or die("cannot select DB");
//database query to select the registered person from the databse and logged in
  // connection of database file
  $con=mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('Project') or die("cannot select DB");
//query to check if the username is already exist in database or not 
  $query=mysql_query("SELECT * FROM newdata WHERE username='".$user."'");
  $numrows=mysql_num_rows($query);
  //if there is no similar username in database then do the following code
  if($numrows==0)
  {
    $sql="INSERT INTO newdata(Name,Father,Age,DOB,Roll,BG) VALUES('$user','$fname','$age','$dob','$roll','$bg')";
//executing the query
  $result=mysql_query($sql);


  if($result){
  echo "Student Successfully Registered";
  
  }
  } else {
  echo "Invalid Entries!";
  }

} else {
  echo "All fields are required!";
}
}
?>
<center>
<h1><a href="logout.php">Logout</a></h1>
</center>
</body> 
</html>



