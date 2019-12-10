<div class="col-sm-3">
    <div class="list-group">
        <?php
        include 'database.php';
        $id = $_SESSION['id'];
        $details= mysqli_fetch_array(mysqli_query($conn,"select * from users where id = '$id'"));
        $usertype = $details['usertype'];
        if(($usertype==1)||$usertype==2) {
            ?>
            <div class="list-group">
                <a class="list-group-item active">CONTROL PANEL</a>
                <br>
               
                
            </div>


            <?php
        }
        if($usertype==1){
            ?>
        <div class="list-group">
            <a href="dashboard.php" class="list-group-item ">Dash Board</a>
            <a href="view.php" class="list-group-item">View students</a>
            <a href="addcourse.php" class="list-group-item">Add course</a>
            <a href="payment.php" class="list-group-item">Payments</a>
            <a href="addinstitution.php" class="list-group-item">Add insttution</a>
            <a href="viewcourse.php" class="list-group-item">View Course</a>
            <a href="viewpayments.php" class="list-group-item">View Payments</a>
             <a href="viewinstitution.php" class="list-group-item">View Institutions</a>
        </div>
            <?php
        }
        if($usertype==2){
            ?>
        <div class="list-group">
            <a class="list-group-item active">Add Section</a>
            <a href="registerstudents.php" class="list-group-item">Add Student</a>
            <a href="payment.php" class="list-group-item">Payments</a>
            <a href="viewForA.php" class="list-group-item">View students</a>
            <a href="viewPay.php" class="list-group-item">View Payments</a>
        </div>

            <?php
        }
        ?>


    </div>


</div>