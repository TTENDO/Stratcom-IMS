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

<!doctype html>
<html lang="en">
<?php include 'head.php'?>

<body>
<br>
<div class="container">
    <div class="row menu">
        <table class="table">
            <tr>
                <td><a href="">REGISTER</a></td>
                <td><a href="view.php">VEIW STUDENT</a></td>

            </tr>

        </table>

    </div>
    <br>
    <div class="row" style="background-color:lightgray">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" >
            <br>
            <form action="index.php" method="POST" >

                <div class="form-group">
                    <label for="">STUDENT ID:</label>
                    <input type="text" required=required name="studentID"  class="form-control" placeholder="Enter Student ID">
                </div>

                <div class="form-group" class="form-horizontal">
                    <label for="">FIRST NAME:</label>
                    <input type="text"  name="fname" class="form-control" placeholder="first name">
                </div>

                <div class="form-group" class="form-horizontal">
                    <label for="">LAST NAME:</label>
                    <input type="text" name="lname" class="form-control" placeholder="last name">
                </div>

                <div class="form-group" class="form-horizontal">
                    <label for="">DOB:</label>
                    <input name="DOB" type="date"  class="form-control" placeholder="D.O.B">
                </div>

                <div class="form-group" class="form-horizontal">
                    <label for="">GENDER:</label>
                    <select  class="form-control" name="gender">
                        <option value="">***select***</option>
                        <option value="M">M</option>
                        <option value="M">F</option>

                    </select>
                </div>

                <div class="form-group" class="form-horizontal">
                    <label for="">ADDRSS:</label>
                    <input type="text" name="address" class="form-control" placeholder="Address">
                </div>

                <div class="form-group" class="form-horizontal">
                    <label for="">INSTITUTION:</label>
                    <select class="form-control" name="institution">
                        <option value="">***select***</option>
                        <option value="gulu">GULU</option>
                        <option value="muk">MUK</option>



                    </select>
                </div>

                <div class="form-group" class="form-horizontal">
                    <label for="">COURSE:</label>
                    <select class="form-control" id="course" name="course">
                        <option value="">***select***</option>
                        <option value="ICT">ICT</option>
                        <option value="CS">CS</option>

                    </select>
                </div>

                <div class="form-group" class="form-horizontal">
                    <label for="">CONTACT:</label>
                    <input type="text"  name="contact" class="form-control" placeholder="Contact">
                </div>

                <div class="form-group" class="form-horizontal">
                    <label for="">EMAIL:</label>
                    <input type="email"  name="email" class="form-control" placeholder="Email">
                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="form-group" class="form-horizontal">
                            <button type="submit" name="submit" class="btn btn-success" value="insert">SUBMIT</button>
                            <button type="reset" name="submit" class="btn btn-danger" value="reset">RESET</button>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>


                </div>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>

</div>
<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/jquery.min.js"></script>
</body>
</html>