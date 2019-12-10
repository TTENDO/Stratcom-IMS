<?php
$conn=mysqli_connect('localhost','root','','stratcom');

$courseid = @$_GET['courseID'];

$conn = mysqli_query($conn,"delete from course where courseID ='$courseid'");


header("location:viewcourse.php");


?>