<?php
include'connection.php';
if(isset($_POST['sub']))
{
	$s=$_POST['cat'];
    $sql="select * from questions where cat_id = '$s'";

    $ques=mysqli_query($con,$sql);
}
?>






<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
 <center><h2>Class Test Organizer</h2></center>
 <form method="post" action="answer1.php">
    <?php
	$i=1;
	while($que=mysqli_fetch_array($ques))
	{   
    ?>
  <table class="table table-bordered">
    <thead>
      <tr class="danger">
        <th><?php echo $i." . ".$que['ques'];?> </th>
      </tr>
    </thead>
   <tbody>
<?php if(isset($que['opt1'])) {?>   
   <tr class="info">
	<td>&nbsp;1&emsp;<input type="radio" value="0"  name="<?php echo $que['id']; ?>" />&nbsp;<?php echo $que['opt1'];?></td>
   </tr>
<?php } ?>
<?php if(isset($que['opt2'])) {?>
   <tr class="info">
	<td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $que['id']; ?>" />&nbsp;<?php echo $que['opt2'];?></td>
   </tr>
   <?php } ?>
   <?php if(isset($que['opt3'])) {?>
   <tr class="info">
	<td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $que['id']; ?>" />&nbsp;<?php echo $que['opt3'];?></td>
   </tr>
   <?php } ?>
   <?php if(isset($que['opt4'])) {?>
   <tr class="info">
	<td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $que['id']; ?>" />&nbsp;<?php echo $que['opt4'];?></td>
   </tr>
   <?php } ?>
   
   </tbody>
  </table>
  <?php
	$i++;}
	?>
	<center><input type="submit" name="submit" value="submit test" class="btn btn-success"/></center>
	</form>
	</div>
<div class="col-sm-2"></div>
</div>
</body>
</html>
