<?php

include'connection.php';
session_start();
$b = $_SESSION['uname'];
$sql="select * from rec where uname='$b'";
$records=mysqli_query($con,$sql);

$sql="select * from category";
$cat=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <div class="row">
   <div class="col-sm-12">
<div class="panel panel-danger">
  <div class="panel-heading"><center><h2>CLASS TEST ORGANIZER</h2></center></div>
  </div>
</div>
</div>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
   
    <li style="float:right"><a href="logout.php">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
	  
	
      <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start Test</button></center>
	  <div class="col-sm-4"></div>
	  <div class="col-sm-4"><br>
	    <div id="select" class="tab-pane fade">
		<form method="post" action="que.php">
	   <select class="form-control" id="" name="cat">
	   <option>Select catagory</option>
	 <?php
				
	   while($ca=mysqli_fetch_array($cat))
	{
     ?>   
      <option value="<?php echo $ca['id']; ?>"><?php echo $ca["cat_name"]; ?></option>
	 <?php
	}
       
	?>
      </select><br>
	  <center><input type="submit" name="sub"  value="submit" class="btn btn-primary"/></center>
	  </form>
	  </div>
	  </div>
    </div> 
    <div id="menu1" class="tab-pane fade">  
	  <div class="container">
  <h2>Showing Profile</h2>
             
  <table class="table table-striped">
    <thead>
      <tr>
		<th>id</th>
		<th>Name</th>
        <th>Username</th>
        <th>Email</th>
		<th>roll</th>
		<th>sem</th>
		<th>branch</th>
      </tr>
    </thead>
    <?php
	while($rec=mysqli_fetch_array($records))
	{
	
	echo "<tr>";
	echo"<td>".$rec['id']."</td>";
	echo"<td>".$rec['fname']."</td>";
	echo"<td>".$rec['uname']."</td>";
	echo"<td>".$rec['email']."</td>";
	echo"<td>".$rec['roll']."</td>";
	echo"<td>".$rec['sem']."</td>";
	echo"<td>".$rec['branch']."</td>";
	echo "</tr>";
	}
	?>
  </table>
</div>
</div>
   
    
  </div>
</div>


</body>
</html>