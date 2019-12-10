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
        <div class="col-sm-9">
            <div class="panel panel-primary">
                <div class="panel-heading">VIEW STUDENTS</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12" >
                            <div CLASS="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <td><b>NO.</b></td>
                                        <td><b>STUDENT ID</b></td>
                                        <td><b>NAMES</b></td>
                                        <td><b>AMOUNT</b></td>
                                        <td><b>BALANCE</b></td>
                                        
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    error_reporting(E_ALL ^ E_NOTICE);//is fixes some errors
                                    include 'database.php';
                                    $no=0;
                                    $select= mysqli_query($conn,"select s.*,b.* from student s, balance b where s.studentID= b.studentID");//USING ALIASES IN DATABASES (e.g a.amount)
                                    while ($array= mysqli_fetch_array($select)) {
                                        $studentid= $array['studentID'];

                                        //selecting total from accounts table

                                        $acc = mysqli_query($conn,"select sum(amount) as total_paid from accounts where student = '$studentid'");
                                        $accd = mysqli_fetch_array($acc);
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $array['studentID']?></td>
                                            <td><?php echo $array['fname']. " ".$array['lname']?></td>
                                            <td><?php echo $accd['total_paid'];?></td>
                                            <td><?php echo $array['balance']?></td>
                                           



                                        </tr>

                                        <?php
                                    }
                                    ?>


                                    </tbody>
                                </table>
                            </div>

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
