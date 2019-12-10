<?php
$stdID = $_GET['sid'];

$conn=mysqli_connect('localhost','root','','stratcom');

mysql_select_db("stratcom") or die("Failed to select the database".mysql_error());//selecting the database.

$ret=mysql_query("select * from student WHERE studentID=$stdID") or die ("Failed to retrieve data".mysql_error());

while($row=mysql_fetch_assoc($ret)){
      $studentID2 = $_POST['studentID'];
    $fname2 = $_POST['fname'];
    $lname2 = $_POST['lname'];
    $DOB2 = $_POST['DOB'];

    $gender2 = $_POST['gender'];
    $address2 = $_POST['address'];
    $institution2 = $_POST['institution'];
    $course2 = $_POST['course'];

    $contact2 = $_POST['contact'];
    $email2 = $_POST['email'];
}

?>

<!doctype html>
<html lang="en">
<?php include 'head.php'?>

<body>
<br>
<div class="container">
    <div class="row">
        <?php include 'nav.php'; ?>
    </div>

    <div class="row">
        <?php include 'sidebar.php';?>
        <div class="col-sm-9" style="padding-right: 2px">
            <div class="panel panel-primary">
                <div class="panel-heading">REGISTER STUDENT</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <form action="registerstudents.php" method="POST" autocomplete="off" required>
                               
                                <div class="form-group" class="form-horizontal">
                                    <label for="">FIRST NAME:</label>
                                    <input type="text" required  name="fname" class="form-control" value="<?php echo $fname2; ?>>
                                </div>

                                <div class="form-group" class="form-horizontal">
                                    <label for="">LAST NAME:</label>
                                    <input type="text" required name="lname" class="form-control" value="<?php echo $lname2; ?>>
                                </div>

                                <div class="form-group" class="form-horizontal">
                                    <label for="">DOB:</label>
                                    <input name="DOB" required type="date"  class="form-control" value="<?php echo $DOB2; ?>>
                                </div>

                                <div class="form-group" class="form-horizontal">
                                    <label for="">GENDER:</label>
                                    <select  required class="form-control" name="gender" value="<?php echo $gender2; ?> >
                                        <option value="">***select***</option>
                                        <option value="M">M</option>
                                        <option value="M">F</option>

                                    </select>
                                </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" class="form-horizontal">
                                <label for="">ADDRESS:</label>
                                <input required type="text" name="address" class="form-control" value="<?php echo $address2; ?>>
                            </div>

                            <div class="form-group" class="form-horizontal">
                                <label for="">INSTITUTION:</label>
                                <select required class="form-control" name="institution"  value="<?php echo $institution2; ?> >
                                    <option value="">***select***</option>
                                    <option value="Gulu">GULU</option>
                                    <option value="Muk">MUK</option>




                                </select>
                            </div>

                            <div class="form-group" class="form-horizontal">
                                <label for="">COURSE:</label>
                                <select required class="form-control" id="course" name="course"  value="<?php echo $course2; ?>>
                                    <option value="">***select***</option>
                                    <option value="ICT">ICT</option>
                                    <option value="CS">DCS</option>

                                </select>
                            </div>

                            <div class="form-group" class="form-horizontal">
                                <label for="">CONTACT:</label>
                                <input required type="text"  name="contact" class="form-control" value="<?php echo $contact2; ?>>
                            </div>

                            <div class="form-group" class="form-horizontal">
                                <label for="">EMAIL:</label>
                                <input required type="email"  name="email" class="form-control" value="<?php echo $email2; ?>>
                            </div>
                            <div class="form-group" class="form-horizontal">
                                <button type="submit" name="enter" class="btn btn-success" value="UPDATE">SUBMIT</button>
                                <button type="reset" name="submit" class="btn btn-danger" value="reset">RESET</button>
                            </div>
                            </form>
                            <?php


if(isset($REQUEST['enter'])) {

    $conn=mysql_connect("localhost","root","") or die ("Failed to connect to the database".mysql_error());//connecting  to the database

    mysql_select_db("stratcom") or die("Failed to select the database".mysql_error());//selecting the database.


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $DOB = $_POST['DOB'];

    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $institution = $_POST['institution'];
    $course = $_POST['course'];

    $contact = $_POST['contact'];
    $email = $_POST['email'];
    
    //Updating
$ins=mysql_query("UPDATE student SET fname='$fname',lname='$lname',DOB='$DOB',gender='$gender',address='$address',institution='$institution',course='$course',contact='$contact',email='$email' WHERE studentID=$stdID") or die("Failed to insert data".mysql_error());


if($ins)
{
echo "Details of ".$lname." have been UPDATED";
}


} 
    
?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/jquery.min.js"></script>
</body>
</html>