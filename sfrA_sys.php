<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include 'dbh.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$year=mysqli_real_escape_string($conn,$_POST['year']);
$facultyId=mysqli_real_escape_string($conn,$_SESSION['id']);


$sql="SELECT id FROM submitted_for_review_table WHERE facultyId='$facultyId' AND year='$year'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0)
{
	$sql1="INSERT INTO submitted_for_review_table (facultyId,year,partA) VALUES ('$facultyId','$year',1)";
	$result1=mysqli_query($conn,$sql1);
	if($sql1){
	$sql3="select * from faculty_table where id='$facultyId'";
	$gmail=mysqli_query($conn,$sql3);
	$email=mysqli_fetch_array($gmail);
		try {
	    //Server settings
	    $mail->SMTPDebug = 4;                                       // Enable verbose debug output
	    $mail->isSMTP();                                            // Set mailer to use SMTP
	    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'sagardama99@gmail.com';                     // SMTP username
	    $mail->Password   = 'vishaldama@0903';                               // SMTP password
	    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 587;
         //$mail->Port       = 25;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('sagardama99@gmail.com', 'CAS & SAF');
	    $mail->addAddress($email['email'], "sagar");     // Add a recipient
	    //$mail->addReplyTo('cassaf19@gmail.com', 'Information');
	    // $mail->addCC('cc@example.com');
	    // $mail->addBCC('bcc@example.com');

	    // Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'SUCESSFULL SUBMISSION';
	    $mail->Body    = 'THANK YOU FOR FILLING THE FORM A > YOUR FROM HAS BEEN SUCESSFULLY SUBMIITED FOR REVIEW';
	    $mail->AltBody = 'THANK YOU FOR FILLING THE FORM A > YOUR FROM HAS BEEN SUCESSFULLY SUBMIITED FOR REVIEW FOR THE YEAR'.$_POST['year'];

	    $mail->send();
	    echo 'Message has been sent';
	    $ms=true;
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	    $ms=false;
	}


	
	if($ms)
		echo '<script>alert("SUCESSFULL MAIL REACHED")</script>';
	else
	{
				echo '<script>alert("SUCESSFULL MAIL NOT REACHED")</script>';

	}
}
}


else
{

	$sql2="UPDATE submitted_for_review_table SET partA=1 WHERE facultyId='$facultyId' AND year='$year'";
	$result2=mysqli_query($conn,$sql2);
}

//making entry into summary table
$sql="SELECT id FROM summary_table WHERE year='$year' AND facultyId='$facultyId'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	$sqlx="INSERT INTO summary_table (year, facultyId) VALUES ('$year', '$facultyId')";
	$resultx=mysqli_query($conn, $sqlx);
}

header("LOCATION: partA.php?id=".$facultyId."&year=".$year);