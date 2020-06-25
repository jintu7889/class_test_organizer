<?php
session_start( );
include ('connection.php');
if (isset($_POST['submit']))
{
	$b=$_POST['uname'];
	$c=$_POST['pass'];
	$d=$_POST['login'];
	$_SESSION['uname'] = $b;
	
	$sql="select * from rec where uname='$b' and pass='$c'";
	$r=mysqli_query($con,$sql);
	$rowctr=mysqli_num_rows($r);

					if($rowctr > 0)
						
					{
					    if($d=="admin")	
						{
							
							header("Location:admin1.php");
						}
						elseif($d=="student")
						{
							header("Location:home.php");
						}
						
					}
					
					else
					{
						header("Location:index.php?err=".urlencode("user id and password is wrong"));

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
	<b class="navbar-brand" href="#">Class Test Organizer</b>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav navbar-right"></ul>
		<div class="container">
			<img src="img/hju.png">
			<?php if(isset($_GRT['err'])){?>
			<div class="alart alart-denger">
			<?php echo $_GET['err'];?>
			</div>
			<?php }?>
			<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
				<div class="form-input">
				<input type="text" name="uname" value="" placeholder="Enter Username" >
				</div>
				<div class="form-input">
				<input type="Password" name="pass" value="" placeholder="Enter Password">
				</div>
				<input type="submit" name="submit" value="LOGIN" class="btn-login"/><br>
				<a href="#">Forget Password?</a>
				<select name="login" class="form-control" name="Session" required>
				<option>Select Session</option>
				<option  value="admin">Admin </option>
				<option  value="student">Student </option>
				</select>
			</form>
			
		</div>
		</div>
		<center>If you are new user. then <a href="register1.php"><input type="button" name="rec" value="Register" /></a>Here</center>
	</body>	
	

	
				
</html>				
	
	