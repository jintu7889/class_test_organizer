<?php
session_start( );
include ('connection.php');
if (isset($_POST['submit']))
{
	$b=$_POST['uname'];
	$c=$_POST['pass'];
	$_SESSION['uname'] = $b;
	
	$sql="select * from rec where uname='$b' and pass='$c'";
	$r=mysqli_query($con,$sql);
	$rowctr=mysqli_num_rows($r);

					if($rowctr > 0)
					{
						
							
							header("Location:home.php");
						
					}
					
					else
					{
						header("Location:login.php?err=".urlencode("user id and password is wrong"));

					}

}
?>







<!DOCTYPE html>
<html>
<head>
	<title>Class Test Organizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
	<link rel="stylesheet" type="text/css" href="CSS/css/font-awesome.css"></link>
	</head>
	<body>
	<a class="navbar-brand" href="#">Class Test Organizer</a>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav navbar-right"></ul>
		  </div>
		<div class="container">
			<img src="img/hju.png">
			<?php if(isset($_GRT['err'])){?>
			<div class="alart alart-denger">
			<?php echo $_GET['err'];?>
			</div>
			<form method="post" action="<?php $_SERVER['PHP_SELF']?>
				<div class="form-input">
				<input type="text" name="uname" value="" placeholder="Enter Username" >
				</div>
				<div class="form-input">
				<input type="Password" name="pass" value="" placeholder="Enter Password">
				</div>
				<input type="submit" name="submit" value="LOGIN" class="btn-login"><br>
				<a href="#">Forget Password?</a>
				<select  class="form-control" name="Session" required>
				<option>Select Session</option>
				<option value="Admin">Admin </option>
				<option value="Student">Student </option>
				</select>
			
			</form>
	</body>			
				
</html>	