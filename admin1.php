<?php

include'connection.php';


$sql="select * from rec";
$records=mysqli_query($con,$sql);
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Class Test Organizer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Class Test Organizer</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Admin Dashboard</a></li>
            <li><a href="#">Settings</a></li>
			<style>
.dropbtn {
    background-color:#262626;
    color: white;
    padding: 16px;
    font-size: 16px;
	min-width: 120px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #000000;
}
</style>
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
    <a href="#">Change Profile</a>
    <a href="logout.php">Logout</a>

  </div>
</div>
            
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
    </nav>


    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a data-toggle="tab" href="admin1.php">Overview <span class="sr-only">(current)</span></a></li>
            <li><a data-toggle="tab" href="manage_category.php">Manage Category</a></li> 
            <li><a data-toggle="tab" href="quiz.php">Manage Questions</a></li>
          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

             <h2 class="sub-header">Student Record</h2>
          <div class="table-responsive">
            <table class="table table-striped">
			</div>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Full Name</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Roll No</th>
				  <th>Branch</th>
				  <th>Gender</th>
				  <th>Semester</th>
				  <th>Mobile No</th>
				  <th>Date of Birth</th>
				  </tr>
			<?php
				while($rec=mysqli_fetch_array($records))
				{
	
				echo "<tr>";
				echo"<td>".$rec['id']."</td>";
				echo"<td>".$rec['fname']."</td>";
				echo"<td>".$rec['uname']."</td>";
				echo"<td>".$rec['email']."</td>";
				echo"<td>".$rec['roll']."</td>";
				echo"<td>".$rec['branch']."</td>";
				echo"<td>".$rec['gender']."</td>";
				echo"<td>".$rec['sem']."</td>";
				echo"<td>".$rec['mobileno']."</td>";
				echo"<td>".$rec['dob']."</td>";
				echo "</tr>";
				}
			?>
            </table>
          </div>
		  </thead>
        </div>
      </div>
    </div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>
