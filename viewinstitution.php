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
                <div class="panel-heading">VIEW STUDENT PAYMENTS</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12" >
                            <div CLASS="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>

                                        <td><b>No.</b></td>
                                        <td><b>INSTITUTION ID</b></td>
                                        <td><b>INSTITUTION NAME></td>
                                        <td><b>EDIT</b></td>
                                        <td><b>DELETE</b></td>


                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $conn=mysqli_connect('localhost','root','','stratcom');

                                    $no=0; //used for counting nambs in the will loop hence aviruable for counting

                                    $select= mysqli_query($conn,"select * from institution");
                                    while ($array= mysqli_fetch_array($select)) {
                                        $no++; //used for counting/showing numbers in the while loop
                                        ?>
                                        <tr>
                                            <td><?php echo $no?></td>
                                            <td><?php echo $array['instID']?></td>
                                            <td><?php echo $array['instname']?></td>

                                            <td><a href="" class="btn btn-primary">Edit</a></td>
                                            <td><a href="deleteinstitution.php?instID=<?php echo $array['instID'];?>" class="btn btn-danger"> Delete</a></td>



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
