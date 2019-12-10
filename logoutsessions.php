<?php
session_start();
if(session_destroy()){
    header("location:index.php");
}
//this ends all the sessions e.g wn  logout ur id frm the database time is end





?>