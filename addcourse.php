<?php
$conn=mysqli_connect('localhost','root','','stratcom');

$message = "";
if(isset($_POST['submit'])) {

    $courseID = $_POST['courseID'];
    $coursename = $_POST['coursename'];
    $coursefees = $_POST['coursefees'];


    $validate = mysqli_query($conn,"select * from course where courseID='$courseID' OR coursename= '$coursename'");

    if(mysqli_num_rows($validate)==0){

        $insert_course= mysqli_query($conn,"insert into course(courseID,coursename) VALUES('$courseID','$coursename')");
        $insert_fees = mysqli_query($conn,"insert into fees(course,coursefees) VALUES('$courseID','$coursefees')");

        if($insert_course && $insert_fees){
            $message = "COURSE SUCCESSFULLY SUMITTED";
        }else{
            $message = "COUSRE ALREADY REGISTERED";
        }
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
                <div class="panel-heading">REGISTER COURSE</div>
                <div class="panel-body">
<br>
                    <div class="row">
                        <div class="col-sm-4">
                            <form action="addcourse.php" method="POST" autocomplete="off" required>
                                <div class="form-group">
                                    <label for="">Course ID:</label>
                                    <input  type="text" required name="courseID"  class="form-control" placeholder="course ID">
                                </div>



                        </div>
                        <div class="col-sm-4">
                            <div class="form-group" class="form-horizontal">
                                <label for="">Course Name:</label>
                                <input required type="text" id="coursename" name="coursename" class="form-control" placeholder="course name">
                            </div>
                            </div>

                        <div class="col-sm-4">
                            <div class="form-group" class="form-horizontal">
                                <label for="">Course Amount:</label>
                                <input required type="number" id="coursefees" name="coursefees" class="form-control" placeholder="course amount">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <div class="form-group" class="form-horizontal">
                                    <br>
                                    <?php echo $message; ?>
                                    <br>
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-success" value="insert">SUBMIT</button>
                                    <button type="reset" name="submit" class="btn btn-danger" value="reset">RESET</button>
                                </div>
                            </div>
                            <div class="col-sm-4"></div>

                        </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!--links to my local js in bootstrap-->
<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/jquery.min.js"></script>
</body>
</html>