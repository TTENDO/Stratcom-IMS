<?php
$conn=mysqli_connect('localhost','root','','stratcom');

if(isset($_POST['submit'])) {

    $studentID = $_POST['studentID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $DOB = $_POST['DOB'];

    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $institution = $_POST['institution'];
    $course = $_POST['course'];

    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $insert= mysqli_query($conn,"insert into student(studentID,fname,lname,DOB,gender,address,institution,course,contact,email) VALUES('$studentID','$fname','$lname','$DOB','$gender','$address','$institution','$course','$contact','$email')");

    if($insert){
        header("location:index.php");
    }

if($insert){
    echo "save";
}else{
    echo mysqli_error($conn);
}
}





















?>