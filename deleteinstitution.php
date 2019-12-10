<?php
$conn=mysqli_connect('localhost','root','','stratcom');

$instID = @$_GET['instID'];
$conn = mysqli_query($conn,"delete from institution where instID ='$instID'");

header("location:viewinstitution.php");


?>