<?php
$conn=mysqli_connect('localhost','root','','stratcom');

$studentid = @$_GET['studentID'];
$conn = mysqli_query($conn,"delete from student where studentID ='$studentid'");

header("location:view.php");


?>