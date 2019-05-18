
<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Register</title>
<script>

function validateform(){  
 var pass=document.myform.pass.value;  
 if(pass.length<6){  
  document.getElementById("numloc").innerHTML="Password must be at least 6 characters long.";  
  return false;  
}else{  
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
    <h1 id="ok" >Registration Form Admin</h1>
  </center>

<form action="" method="POST" onsubmit="return validateform()">
  <div class="form-group">

<label style="font-size: 25px; color: maroon" >Username:</label>
      <input type="text" class="form-control" name="user" placeholder="Enter name"> <br>
    </div>
    <div class="form-group">
<label style="font-size: 25px; color: maroon">Father Name:</label>
      <input type="text" class="form-control" name="fname" placeholder="Enter Father name"> <br>
    </div>
    <div class="form-group">
<label style="font-size: 25px; color: maroon">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter your email"> <br>
    </div>
    <div class="form-group">
<label style="font-size: 25px; color: maroon">Password:</label>
      <input type="password" class="form-control" name="pass" placeholder="Enter Password"> <br><span id="numloc"></span><br/>  
</div>

<input type="submit" value="Register" name="submit" />
<br>
<br>
<p style="font-size: 25px; color: maroon" >Click below to Login:</p>
<br>
<a href="signin.php" target="_blank"><button style="height: 70px; width: 125px; color: black;" type="button" class="btn btn-primary">Sign In</button></a>
<br>
<br>
<br>
</form>
</div>
<?php
error_reporting(0);//to remove php warnings and notices from the web page
if(isset($_POST["submit"])){
// if our input fields are not empty then save data to database
if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['fname'])&& !empty($_POST['email'])) {
  $user=$_POST['user'];
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  
  

// connection of database file
  $con=mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('Project') or die("cannot select DB");
//query to check if the username is already exist in database or not 
  $query=mysql_query("SELECT * FROM data WHERE username='".$user."'");
  $numrows=mysql_num_rows($query);
  //if there is no similar username in database then do the following code
  if($numrows==0)
  {
    $sql="INSERT INTO data(username,password,Father,myemail) VALUES('$user','$pass','$fname','$email')";

//executing the query
  $result=mysql_query($sql);


  if($result){
  echo "Account Successfully Created";

  } else {
  echo "Failure!";
  }

  } else {
  echo "That username already exists! Please try again with another.";
  }

} else {
  echo "All fields are required!";
}
}
?>

</body> 
</html>



