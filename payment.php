<?php
include 'database.php';
error_reporting(E_ALL ^ E_NOTICE);//is fixes some errors

$message = "";
if(isset($_POST['submit'])) {

    $accdate = $_POST['accdate'];
    $student = $_POST['student'];
    $amount = $_POST['amount'];


    $insert= mysqli_query($conn,"insert into accounts(accdate,student,amount) VALUES('$accdate','$student','$amount')");


    $total_pay = 500000;
    $validate_pay = mysqli_query($conn,"select * from balance where studentID = '$student'");
    $validate_details = mysqli_fetch_array($validate_pay);

    if(mysqli_num_rows($validate_pay)>0){

        $balance =  $validate_details['balance'];

        if(($balance>$amount) || ($balance==$amount)){

            $insert_payment = mysqli_query($conn,"insert into accounts(accDate,student,amount) VALUES('$accDate','$student','$amount')");


            //Update balance

            $new_balance = $balance - $amount;
            $update_balance = mysqli_query($conn,"update balance set balance='$new_balance' where  studentid = 'student'");
            $message = "Payment is successful, Your balance is $new_balance";

        }else{
            $message="failed";
        }


    } else{
        $insert= mysqli_query($conn,"insert into accounts(accdate,student,amount) VALUES('$accdate','$student','$amount')");
        $balance = $total_pay - $amount;
        $insert_balance=mysqli_query($conn,"insert into balance(studentID,balance) VALUES ('$student','$balance')");

        $message = "Payment is successful, Your balance is $balance";
    }


    //calculating balance


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
                <div class="panel-heading">Capture payments</div>
                <div class="panel-body">
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <form action="payment.php" method="POST" autocomplete="off" required>
                                <div class="form-group">
                                    <label for="">Payment Date</label>
                                    <input  type="date" required name="accdate"  class="form-control" placeholder="course ID">
                                </div>



                        </div>
                        <div class="col-sm-4">
                            <div class="form-group" class="form-horizontal">
                                <div class="form-group" class="form-horizontal">
                                    <label for="">Student's Name:</label>
                                    <select required class="form-control" name="student">
                                        <option value="">***SELECT**</option>
                                        <?php
                                        include 'database.php';
                                        $select = mysqli_query($conn,"select * from student");
                                        while ($results = mysqli_fetch_array($select)){
                                        ?>
                                        <option value="<?php echo $results['studentID']?>"> <?php echo $results['fname']. " ".$results['lname'];?>
                                            <?php
                                            }
                                            ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group" class="form-horizontal">
                                <label for="">Amount Paid</label>
                                <input required type="number" id="amount" name="amount" class="form-control" placeholder="amount">
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
<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/jquery.min.js"></script>
</body>
</html>