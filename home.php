
<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<style type="text/css">

#map_canvas { height: 40%; width: 100% }
html { height: 100% }

	body
  { height: 100%; width: 100%; } {
   
    background-color: #b30000;
        display:table;  margin: auto; border: solid black 2px;
    }
    table {
        border-collapse: collapse;
        }
       
       #one{
   font-weight: bold;font-size: 55px;font-style:Arial;font-family:'Lobster Two', cursive;
    color: #0077b3;
    text-shadow: -1px 0 maroon, 0 3px maroon, 3px 0 maroon, 0 -1px maroon;

       } 
   
</style>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
	
var d = new Date(2018);
document.getElementById("demo").innerHTML = d;


  function initialize()
{
// Loading Google Maps
var num = new google.maps.LatLng(31.4590573,74.2723242);
var myOptions = {
zoom: 17,
center: num,
mapTypeId: google.maps.MapTypeId.ROADMAP
};
var mymap = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
var marker = new google.maps.Marker({
position: num,
map: mymap,
title:""
});
}
</script>
<body style="background-color: #c2d6d6;" onload="initialize()"> 
<div align="right" style="font-size: 55px; margin-right: 30px; color: #0077b3;font-style:Arial;font-family:'Lobster Two', cursive;text-shadow: -1px 0 maroon, 0 1px maroon, 1px 0 maroon, 0 -1px maroon;"><?php

echo "<h3><span >Today is </span>" . date("Y-m-d") . "<br></h3>";
echo "<h3>Today is " . date("l<br><br></h3><br>");
?>
	</div>
 
	<div id="new" class="jumbotron">

    <p align="center" style="font-weight: bold;font-size: 55px;font-style:Arial;font-family:'Lobster Two', cursive;
    color: #0077b3;
    text-shadow: -1px 0 maroon, 0 3px maroon, 3px 0 maroon, 0 -1px maroon;
} " > SHAN CABLES</p> 
     <div  class="container">
  <br>
<center>
                   
  <img  style="opacity: 1; padding:2px;
   border:6px solid maroon;" src="si.jpg"  class="img-responsive" alt="Cinque Terre" width="304" height="236"> 
  </center>
</div>
<br>
<center>
    <p style="margin: 20px; font-weight: bold;font-size: 25px;color: black;font-style:Arial;font-family:'Lobster Two', cursive; ">The mission of the SICAS at the Escanaba Upper Elementary School is to educate all students to become competent learners and critical thinkers. Through our inclusive curriculum, we provide an atmosphere, which fosters positive academic achievement according to students' abilities.</center></p> 
  </div>
  <br>
  <br>

<div class="container">
	<p align="center" style="font-weight: bold;font-size: 75px;font-style:Arial;font-family:'Lobster Two', cursive; color: #0077b3;
    text-shadow: -1px 0 maroon, 0 3px maroon, 3px 0 maroon, 0 -1px maroon;">Admin Login panel</p>
	<br>

  <h2>If you are a new user then sign up!</h2>
   <h2>Already Registered? Great then Click on the Sign in button!</h2>
   <br>
   <br>
   <br>
</div>

<div class="container">
  <center>
  <a href="signin.php" ><button style="height: 70px; width: 125px; border:3px solid maroon; color: black;" type="button" class="btn btn-primary">Sign In</button></a>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="signup.php" ><button style="height: 70px; width: 125px; color: black;  border:3px solid maroon; type="button" class="btn btn-primary">Sign Up</button></a>
  </center>




</div>

<div class="container">
	<br>
	<br>
  <p style="color: blue; font-style: arial;">Having Problem in Signing Up?<br>Contact us for Solution!</p>

   <h2>Wanna know About Every Detail? Give us your email!</h2>
<br>
   <p>
   	Enter your email here:
   </p>
   <p> <span class="glyphicon glyphicon-envelope"></span> &emsp;&emsp;<input type="email" name=""></p> 
<br>
 <button type="button" class="btn btn-success">Submit</button>
   <br>
   <br>
   <br>


  
</div>
<br>

<p align="center" style="font-weight: bold;font-size: 55px;font-style:Arial;font-family:'Lobster Two', cursive;
    color: #0077b3;
    text-shadow: -1px 0 maroon, 0 3px maroon, 3px 0 maroon, 0 -1px maroon;
} " > Find Us on Google Map:</p> 

<div  id="map_canvas"></div>
<br>
<br>


 <p align="center"> Copyrights @2018 SICASIntSchool</p> 
</body>
</html>
