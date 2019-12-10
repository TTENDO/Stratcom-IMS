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
        header("location:registerstudents.php");
    }

    if($insert){
        echo "save";
    }else{
        echo mysqli_error($conn);
    }
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
                                <div class="form-group">
                                    <label for="">STUDENT ID:</label>
                                    <input  type="text" required name="studentID"  class="form-control" placeholder="Enter Student ID">
                                </div>

                                <div class="form-group" class="form-horizontal">
                                    <label for="">FIRST NAME:</label>
                                    <input type="text" required  name="fname" class="form-control" placeholder="first name">
                                </div>

                                <div class="form-group" class="form-horizontal">
                                    <label for="">LAST NAME:</label>
                                    <input type="text" required name="lname" class="form-control" placeholder="last name">
                                </div>

                                <div class="form-group" class="form-horizontal">
                                    <label for="">DOB:</label>
                                    <input name="DOB" required type="date"  class="form-control" placeholder="D.O.B">
                                </div>

                                <div class="form-group" class="form-horizontal">
                                    <label for="">GENDER:</label>
                                    <select  required class="form-control" name="gender">
                                        <option value="">***select***</option>
                                        <option value="M">M</option>
                                        <option value="M">F</option>

                                    </select>
                                </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" class="form-horizontal">
                                <label for="">ADDRESS:</label>
                                <input required type="text" name="address" class="form-control" placeholder="Address">
                            </div>

                            <div class="form-group" class="form-horizontal">
                                <label for="">INSTITUTION:</label>
                                <select required class="form-control" name="institution">
                                    <option value="">***select***</option>
                                    <option value="Gulu">GULU</option>
                                    <option value="Muk">MUK</option>




                                </select>
                            </div>

                            <div class="form-group" class="form-horizontal">
                                <label for="">COURSE:</label>
                                <select required class="form-control" id="course" name="course">
                                    <option value="">***select***</option>
                                    <option value="ICT">ICT</option>
                                    <option value="CS">DCS</option>

                                </select>
                            </div>

                            <div class="form-group" class="form-horizontal">
                                <label for="">CONTACT:</label>
                                <input required type="text"  name="contact" class="form-control" placeholder="Contact">
                            </div>

                            <div class="form-group" class="form-horizontal">
                                <label for="">EMAIL:</label>
                                <input required type="email"  name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group" class="form-horizontal">
                                <button type="submit" name="submit" class="btn btn-success" value="insert">SUBMIT</button>
                                <button type="reset" name="submit" class="btn btn-danger" value="reset">RESET</button>
                            </div>
                            </form>
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