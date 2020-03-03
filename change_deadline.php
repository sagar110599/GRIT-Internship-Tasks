<?php

session_start();

if(!isset($_SESSION['id']))
{
	header("LOCATION: index.php");
}
else
{

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlx="SELECT profilePicLocation, admin FROM faculty_table WHERE id='$userId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);
$profilePicLocation=$rowx['profilePicLocation'];
$admin=$rowx['admin'];

include 'top.php';
include 'left-nav.php';


?>

<div class="container" style="background-color: #343a40">
    <div class="row">    		
	    <div class="col offset-md-2" style="background-color: #343a40">



			<div class="tab-content" id="pills-tabContent" style="background-color: #343a40">	
				<div class="tab-pane fade show active" id="pills-apply" role="tabpanel" aria-labelledby="pills-apply-tab">		
					<div class="row">
					   <form action="change_deadline.php" method="POST">
								<label class="label-user col-md-2 control-label text-right">ENTER DATE</label>
								<div class="col-md-4">
									<input type="text" class="form-control register-form-input createuserformcontrol" name="date" placeholder="ENTER DATE" style="width:90%" required>
								</div>
								<label class="label-user col-md-2 control-label text-right">ENTER MONTH</label>
								<div class="col-md-4">
									<input type="text" class="form-control register-form-input createuserformcontrol" name="month" placeholder="ENTER MONTH" style="width:90%" required>
								</div>
							<br>
							<div class="col-md-3 text-right" style="height:100%">
						 	<button name="change" class="btn btn-info custom-button-width navbar-right my-auto" style="font-size: 17px">CHANGE DEADLINE</button>
						</div>
							</form> 
					</div>
					</div>
				<br>
			<!-- </div> -->
</div>
</body>
</html>

<?php
if(isset($_POST['change'])){
	$date=$_POST['date'];
	$month=$_POST['month'];
	$new=$date.'-'.$month.'-';
	$q="update deadline set date='$new'";
	$q_run=mysqli_query($conn,$q);
	if($q_run){
		echo '<script>alert("deadline updated sucessfully")</script>';
	}
}
}

?>