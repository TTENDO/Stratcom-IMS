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
                <div class="panel-heading">DASH BOARD</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                            <div class="panel-heading">TOTAL STUDENTS</div>
                            <div class="panel-body">
                                <img src="images/course.png" style="height: 100px" class="img img-responsive" alt="">
                            </div>
                                <a href="view.php">
                                    <div class="panel-footer" style="font-size: 28px">
                                        <?php
                                        $conn=mysqli_connect('localhost','root','','stratcom');
                                        $st = mysqli_query($conn,"select count(studentID) as Total_Students from student");
                                        $st_results = mysqli_fetch_array($st);
                                        echo $st_results['Total_Students'];

                                        ?>
                                    </div>
                                </a>

                            </div>

                            </div>

                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">TOTAL COURSE</div>
                                <div class="panel-body">
                                    <img src="images/student.png" style="height: 100px" class="img img-responsive" alt="">
                                </div>

                                <a href="viewcourse.php">
                                    <div class="panel-footer" style="font-size: 28px">
                                        <?php

                                        $conn=mysqli_connect('localhost','root','','stratcom');
                                        $st = mysqli_query($conn,"select count(courseID) as course1 from course");//(course1)this is the name given to count ist can b any thng any word
                                        $st_results = mysqli_fetch_array($st);
                                        echo $st_results['course1'];

                                        ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">TOTAL INSTUTIONS</div>
                                <div class="panel-body">
                                    <img src="images/inst.png" style="height: 100px" class="img img-responsive" alt="">
                                </div>
                                <a href="viewinstitution.php">
                                    <div class="panel-footer" style="font-size: 28px">
                                        <?php

                                        $conn=mysqli_connect('localhost','root','','stratcom');
                                        $st = mysqli_query($conn,"select count(instID) as inst from institution");
                                        $st_results = mysqli_fetch_array($st);
                                        echo $st_results['inst'];

                                        ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">STUDENTS WHO PAID</div>
                                <div class="panel-body">
                                    <img src="images/paidstdnts.jpg" style="height: 100px" class="img img-responsive" alt="">
                                </div>
                                <a href="viewinstitution.php">
                                    <div class="panel-footer" style="font-size: 28px">
                                        <?php

                                        $conn=mysqli_connect('localhost','root','','stratcom');
                                        $st = mysqli_query($conn,"select count(accountID) as account from accounts");
                                        $st_results = mysqli_fetch_array($st);
                                        echo $st_results['account'];

                                        ?>
                                    </div>
                                </a>
                            </div>
                        </div>


    </div>

</div>
                <!--footer shows date-->
                <div class="panel-footer"><?php echo date("Y"); ?> Stratcom All rights Reserved</div>
            </div>
        </div>
    </div>
</div>
<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/jquery.min.js"></script>
</body>
</html>