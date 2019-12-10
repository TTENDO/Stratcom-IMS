<?php
//error_reporting(1);
session_start();
if(!isset($_SESSION['id'])  || (trim($_SESSION['id']==''))){
    header("location:index.php");
    exit();
}
?>
