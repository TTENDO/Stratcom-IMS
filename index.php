<?php
include 'database.php';
$feedback="";
session_start();
if(isset($_POST['login'])){
    $uname = $_POST['username'];
    $pw         = $_POST['password'];

    $check = mysqli_query($conn,"select * from users where username='$uname' and password='$pw'");
    $result = mysqli_fetch_array($check);
    if(mysqli_num_rows($check)>0){
        $_SESSION['id'] = $result['id'];
        $id = $_SESSION['id'];
        header("location:dashboard.php");
    }else{
        $feedback = "Incorrect Username or Password";
    }
}

?>


<!doctype html>
<html lang="en">
<?php include 'head.php'?>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">Stratcom Student Information Management System</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="index.php" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Username:</label>
                            <div class="col-sm-10">
                                <input name="username" type="text" required autocomplete="off" class="form-control" id="email" placeholder="Enter Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                            <div class="col-sm-10">
                                <input name="password" type="password" required autocomplete="off" class="form-control" id="pwd" placeholder="Enter password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd"></label>
                            <div class="col-sm-10">
                                <?php echo $feedback;?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" name="login" class="btn btn-success" value="Login">
                            </div>
                        </div>
                    </form>

                </div>
                <center> <div style="background: #337ab7;color: white" class="panel-footer">All rights reserved</div></center>
            </div>
        </div>
        <div class="col-sm-3"></div>
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