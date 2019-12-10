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
                <div class="panel-heading">VIEW COURSE</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12" >
                            <div CLASS="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <td><b>No.</b></td>
                                        <td><b>COURSE ID</b></td>
                                        <td><b>COURSE NAME</b></td>
                                        <td><b>EDIT</b></td>
                                        <td><b>DELETE</b></td>


                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $conn=mysqli_connect('localhost','root','','stratcom');

                                    $no=0;

                                    $select= mysqli_query($conn,"select * from course");
                                    while ($array= mysqli_fetch_array($select)) {

                                        $no++;

                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $array['courseID']?></td>
                                            <td><?php echo $array['coursename']?></td>
                                            <td><a href="addcourse.php?courseID,coursename=<?php echo $array['courseID']. $array['coursename'];?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="deletecourse.php?courseID=<?php echo $array['courseID'];?>" class="btn btn-danger"> Delete</a></td>



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