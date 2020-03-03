<?php

$conn=mysqli_connect('localhost','root','','cas_db');
$Q='select * from deadline';

$q_run=mysqli_query($conn,$Q);
$row=mysqli_fetch_array($q_run);
$dead_base=$row['date'];

if(!$conn){
	die("Couldnot connect to server");
}