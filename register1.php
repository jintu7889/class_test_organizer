<?php
include'connection.php';
if(isset($_POST['submit']))
{
	$a=$_POST['fname'];
	$b=$_POST['uname'];
	$c=$_POST['pass'];
	$d=$_POST['email'];
	$e=$_POST['roll'];
	$f=$_POST['branch'];
	$g=$_POST['gender'];
	$h=$_POST['sem'];
	$i=$_POST['mobileno'];
	$j=$_POST['dob'];
	$sql="insert into rec(fname,uname,pass,email,roll,branch,gender,sem,mobileno,dob) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
	mysqli_query($con,$sql);
	header("Location:index.php");
	
}
?>





<!DOCTYPE html>
<html >
<head>
  <title>Register Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>
<div class="container">
 <div class="row">
   <div class="col-sm-12">
<div class="panel panel-danger">
     <div class="panel-heading"><center><h1>Class Test Organizer</h1></center></div>
      
    </div>
</div>
</div>
</div>

<div class="container" style="margin:10px 0px 0px 32%;">
 <div class="row">
   <div class="col-sm-6">
    <div class="panel panel-info">
     <div class="panel-heading"><h3>Register Form</h3></div>
	 <div class="panel-body">


		<form method="post" action="<?php $_SERVER['PHP_SELF']?>">


<label>Enter Full name:</label>
<input type="text" class="form-control" name="fname" value="" placeholder="Enter your Name" required/>
</br>
<label>Enter User name:</label>
<input type="text" class="form-control" name="uname" value="" placeholder="Enter your Username" required/>
</br>
<label>Enter password:</label>
<input type="password"  class="form-control" name="pass" value="" placeholder="Enter your password" required/>
</br>
<label>Enter Email id:</label>
<input type="text" name="email" class="form-control" value="" placeholder="Enter your email" required/>
</br>
<label>Enter Roll No:</label>
<input type="text" name="roll" class="form-control" value="" placeholder="Enter your rollno" required/>
</br>
<label>Branch</label>
<select  class="form-control" name="branch" required>
<option>Select your Branch</option>
<option value="Computer">Computer</option>
<option value="ETC">ETC</option>
<option value="Chamical">Chemical</option>
<option value="Mechanical">Mechanical</option>
<option value="Elctrical">Electrical</option>
<option value="Civil">Civil</option>
</select>
</br>
<label>Gender:</label>
<input type="radio" name="gender" value="male" required>Male
<input type="radio" name="gender" value="female" required>female
</br>
<label>Select your semester</label>
<select  class="form-control" name="sem" required>
<option>Select</option>
<option value="1st Semister">1st Semester</option>
<option value="2st Semister">2nd Semester</option>
<option value="3st Semister">3rd Semester</option>
<option value="4st Semister">4th Semester</option>
<option value="5st Semister">5th Semester</option>
<option value="6st Semister">6th Semester</option>
</select>
</br>
<label>Mobile number:</label>
<input type="number"  class="form-control" name="mobileno" value="" placeholder="Enter Mobile number" required/>
</br>
<label>Date of birth:</label>
<input type="date"  class="form-control" name="dob" value="" required/>
</br>
<input type="submit" name="submit" value="Register" />
<input type="reset" value="cancel" name="cancel"/>
</form>
</div>
</div>
</div>
</div>
</div>
</html>