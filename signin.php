
<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Sign In</title>
    
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
    <h1 id="ok" >Sign In</h1>
  </center>

<form action="" method="POST" >
  <div class="form-group">

<label style="font-size: 25px; color: maroon" >Name</label>
      <input type="text" class="form-control" name="user" placeholder="Enter name"> <br>
    </div>
   
    
    <div class="form-group">
<label style="font-size: 25px; color: maroon">Password:</label>
      <input type="password" class="form-control" name="pass" placeholder="Enter Password"> <br>
</div>

<input type="submit" value="Sign In" name="submit" />
<br>
<br>
</form>
</div>
<?php
if(isset($_POST["submit"])){
// if our input fields are not empty then save data to database

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
  $user=$_POST['user'];
  $pass=$_POST['pass'];
// connection of database file
  $con=mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('Project') or die("cannot select DB");
//database query to select the registered person from the databse and logged in
  $query=mysql_query("SELECT * FROM data WHERE username='".$user."' AND password='".$pass."'");
  $numrows=mysql_num_rows($query);
  if($numrows!=0)
  {
  while($row=mysql_fetch_assoc($query))
  {
  $dbusername=$row['username'];
  $dbpassword=$row['password'];
  }
//if our username and password matches then do the following code
  if($user == $dbusername && $pass == $dbpassword)
  {
    //session is use to keep the user logged in 
  session_start();
  $_SESSION['sess_user']=$user;

  /* Redirect browser */
  header("Location: Student_registration.php");
  }
  } else {
  echo "Invalid username or password!";
  }

} else {
  echo "All fields are required!";
}
}
?>


</body> 
</html>



