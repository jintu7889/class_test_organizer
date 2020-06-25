<?php
include'connection.php';
{
		$qus=$_POST['cat_name'];
		$sql=("select * from questions where cat_id='$qus' ");		
		mysqli_query($con,$sql);
		echo '$qus';
		
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Class Test Organizer</h2>  

  <table class="table table-bordered">
    <thead>
      <tr>
        <th><?php echo $qus['ques'];?></th>        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
      </tr>
     
    </tbody>
  </table>
  
</div>

</body>
</html>
