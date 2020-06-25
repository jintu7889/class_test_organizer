<?php
session_start();

session_destroy();
unset($SESSION['uname']);
header("location:index.php");

exit();
?>