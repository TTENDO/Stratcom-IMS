<?php
include 'database.php';
if(isset($_POST['submit'])){
    $studentID = $_POST['studentID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $DOB = $_POST['DOB'];
    $gender = $_POST['gender'];

    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];


    $update = mysqli_query($conn,"update student set fname='$fname',lname='$lname',DOB='$DOB',gender='$gender',address='$address',contact='$contact',email='$email' where studentID='$studentID'");

    if($update){
       // echo mysqli_error($con);
       header("location:view.php");
    }

}
?>




<!doctype html>
<html lang="en">
<?php include 'head.php'?>
<body>

<div class="container">
    <div class="row">
        <?php include 'nav.php';?>
    </div>
    <div class="row">

            <?php include "sidebar.php";?>
        <div class="col-sm-9" style="padding-right: 2px">
            <div class="panel panel-primary">
                <div class="panel-heading">REGISTER STUDENT</div>
                <div class="panel-body">
                    <?php
                    include 'database.php';
                    //Getting the variable which was passed feom view-students.php in a variable std
                    $studentID = $_GET['studentID'];
                    $q = mysqli_query($conn,"select * from student where studentID='$studentID'");
                    $details  = mysqli_fetch_array($q);
                    ?>
                    <form action="edit-student.php" method="post" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label col-sm-2"  for="">Student ID</label>
                                    <div class="col-sm-10">
                                        <input name="studentID" readonly value="<?php echo $details['studentID']; ?>" type="text" autocomplete="off" required class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2"  for="">First Name</label>
                                    <div class="col-sm-10">
                                        <input name="fname" value="<?php echo $details['fname']; ?>" autocomplete="off" required type="text" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2"  for="">Last Name</label>
                                    <div class="col-sm-10">
                                        <input name="lname" autocomplete="off" value="<?php echo $details['lname']; ?>" required type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2"  for="">DOB</label>
                                    <div class="col-sm-10">
                                        <input name="DOB" autocomplete="off" value="<?php echo $details['DOB']; ?>" required type="text" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2"  for="">Gender</label>
                                    <div class="col-sm-10">
                                        <input name="gender" autocomplete="off" value="<?php echo $details['gender']; ?>" required type="text" class="form-control" >

                                    </div>
                                </div>

                                <!--<div class="form-group">
                                    <label class="control-label col-sm-2"  for="">Course</label>
                                    <div class="col-sm-10">
                                        <input name="course" autocomplete="off" value="<?php echo $details['course']; ?>" required type="text" class="form-control" >
                                    </div>
                                </div>-->
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label col-sm-2"  for="">Address</label>
                                    <div class="col-sm-10">
                                        <input name="address" autocomplete="off" value="<?php echo $details['address']; ?>" required type="text" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2"  for="">Contact</label>
                                    <div class="col-sm-10">
                                        <input name="contact" autocomplete="off" required type="text" value="<?php echo $details['contact']; ?>" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2"  for="">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" autocomplete="off" required type="email" value="<?php echo $details['email']; ?>" class="form-control" >
                                    </div>
                                </div>

                                <!--<div class="form-group">
                                    <label class="control-label col-sm-2"  for="">Institution</label>
                                    <div class="col-sm-10">
                                        <input name="institution" autocomplete="off" required type="text" value="<?php echo $details['institution']; ?>" class="form-control" >

                                    </div>
                                </div>-->

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <input type="submit" name="submit" class="btn btn-success" value="Update">
                                        <input type="reset" class="btn btn-danger" value="Reset">
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/jquery.min.js"></script>
<script>
    // Data Picker Initialization
    $('.datepicker').pickadate();
</script>
</body>
</html>
