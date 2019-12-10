

<?php
$conn=mysqli_connect('localhost','root','','stratcom');

$feedback="";
session_start();

if(isset($_POST['login'])){

    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    $check = mysqli_query($conn,"select * from users where username='$uname' and password='$pwd'");
    $result = mysqli_fetch_array($check);


    if(mysqli_num_rows($check)>0){

        $_SESSION['checker'] = $result['userid'];

        header("location:dashboard.php");
    } else
    {
        $feedback = "Incorrect Username or Password!!!!";
    }
}
?>








<!doctype html>
<html lang="en">
<?php include 'head.php'?>
<body>

<div class="container">

    <div class="row"><br><br><br><br><br><br><br></div>



    <div class="row">

        <div class="col-sm-4"></div>

        <div class="col-sm-4">
            <form action="" class="form-inline" style="background-color: #4cae4c">
                <div style="padding:10px 10px 10px 40px;">
                    <h4 class="login-heading">Register</h4>
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" placeholder="Enter your username">
                    </div>
                    <br><br>

                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" placeholder="Enter your password">
                    </div>
                    <br><br>

                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <br><br>

                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-2">

                            <button type="submit" style="color:white">Login</button>


                        </div>
                        <div class="col-sm-2">


                            <button type="submit" style="color:white; margin-bottom: 10px;">Register</button>
                        </div>

                        <div class="col-sm-2"></div>

                    </div>


                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4"></div>

                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                                <p > 2019 Copyright: <a>www.dmpa.com</a></p>

                    </div>
                    <div class="col-sm-4"></div>
                </div>

                <div>

                </div>

            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="background-color: black" >
            <p > 2019 Copyright: <a>www.dmpa.com</a></p>
        </div>
        <div class="col-sm-4"></div>
    </div>











    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/jquery.min.js"></script>
</body>
</html>