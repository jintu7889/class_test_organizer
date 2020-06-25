<?php
include'connection.php';
if(isset($_POST['submit']))
{
	$a=$_POST['ques'];
	$b=$_POST['opt1'];
	$c=$_POST['opt2'];
	$d=$_POST['opt3'];
	$e=$_POST['opt4'];
	$g=$_POST['ans'];
	$cat=$_POST['cat'];
	$array=[$b,$c,$d,$e];
	$f=array_search($g,$array);
	$sql="insert into questions(ques,opt1,opt2,opt3,opt4,ans,cat_id) values('$a','$b','$c','$d','$e','$f','$cat')";
	mysqli_query($con,$sql);
	
}	
$sql="select * from category";
 $cat=mysqli_query($con,$sql);
 
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
            <li><a data-toggle="tab" href="list_ques.php">List Of Questions <span class="sr-only">(current)</span></a></li>
            <li><a data-toggle="tab" href="quiz.php">Add New Quiz</a></li>
			<li><a href="admin1.php">Back To Previous Menu</a></li>

          </ul>

			
    

         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Quiz</h1>

			 
			 <form method="post" action="quiz.php">			 
    <div class="form-group">
      <label for="Text">Questions</label>
      <input type="Text" class="form-control" name="ques"  placeholder="Enter Questions">
    </div>
    <div class="form-group">
      <label for="Text">Option-1:</label>
      <input type="Text" class="form-control" name="opt1"  placeholder="Enter Option-1">
    </div>
	<div class="form-group">
      <label for="Text">Option-2:</label>
      <input type="Text" class="form-control" name="opt2"  placeholder="Enter Option-2">
    </div>
	<div class="form-group">
      <label for="Text">Option-3:</label>
      <input type="Text" class="form-control" name="opt3"  placeholder="Enter Option-3">
    </div>
	<div class="form-group">
      <label for="Text">Option-4:</label>
      <input type="Text" class="form-control" name="opt4" placeholder="Enter Option-4">
    </div>
	<div class="form-group">
      <label for="Text">Answer:</label>
      <input type="Text" class="form-control" name="ans"  placeholder="Enter Answer">
    </div>
		<div class="form-group">
		
			<select class="form-control" id="sell" name="cat">
					<option value="">Choose Category</option>
					<?php
	   
	   while($ca=mysqli_fetch_array($cat))
	{
     ?>  
      <option value="<?php echo $ca['id']; ?>"><?php echo $ca["cat_name"]; ?></option>
	  <?php
	}
	
	?>
					</select>
				</div>				
    <button type="submit"  name="submit" class="btn btn-default">Submit</button><br>
     </form>   
		</div>
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


