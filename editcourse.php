<?php
$conn=mysqli_connect('localhost','root','','stratcom');

$courseid = @$_GET['courseID'];
$coursename = $_GET['coursename'];

$conn = mysqli_query($conn,"update course set coursename='$_POST[coursename]' WHERE courseid='$_POST[courseID]'");

header("location:viewcourse.php");


?>
