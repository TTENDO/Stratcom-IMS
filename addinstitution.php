<?php
$conn=mysqli_connect('localhost','root','','stratcom');


if(isset($_POST['submit'])) {

    $instID = $_POST['instID'];
    $instname = $_POST['instname'];


    $insert= mysqli_query($conn,"insert into institution(instID,instname) VALUES('$instID','$instname')");

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
                <div class="panel-heading">REGISTER INSTITUTION</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <form action="addinstitution.php" method="POST" autocomplete="off" required>
                                <div class="form-group">
                                    <label for="">Institution ID:</label>
                                    <input  type="text" required name="instID"  class="form-control" placeholder="institution ID">
                                </div>



                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" class="form-horizontal">
                                <label for="">Instution Name:</label>
                                <input required type="text" id="instname" name="instname" class="form-control" placeholder="Instution name">
                            </div>
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