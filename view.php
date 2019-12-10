<!doctype html>
<html lang="en">
<?php include 'head.php'?>>

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
                                        <td><b>AGE</b></td>
                                        <td><b>GENDER</b></td>
                                        <td><b>ADDRESS</b></td>
                                        <td><b>INST</b></td>
                                        <td><b>COURSE</b></td>
                                        <td><b>TEL</b></td>
                                        <td><b>EMAIL</b></td>
                                        <td><b>EDIT</b></td>
                                        <td><b>DELETE</b></td>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $conn=mysqli_connect('localhost','root','','stratcom');
                                        $no=0;
                                    $select= mysqli_query($conn,"select * from student");
                                    while ($array= mysqli_fetch_array($select)) {
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $array['studentID']?></td>
                                            <td><?php echo $array['fname']. " ".$array['lname']?></td>

                                            <td><?php

                                                $dob = $array['DOB'];
                                                $yearofbirth = date('Y',strtotime($dob));
                                                $currentyear = date('Y');
                                                $age = $currentyear-$yearofbirth;
                                                echo $age;

                                                ?>
                                            </td>

                                            <td><?php echo $array['gender']?></td>
                                            <td><?php echo $array['address']?></td>
                                            <td><?php echo $array['institution']?></td>
                                            <td><?php echo $array['course']?></td>
                                            <td><?php echo $array['contact']?></td>
                                            <td><?php echo $array['email']?></td>
                                            <td><a href="updateStudent.php?studentID<?php echo $studentID;?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="deletestudent.php?studentID=<?php echo $array['studentID'];?>" class="btn btn-danger"> Delete</a></td>



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
