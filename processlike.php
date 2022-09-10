<?php session_start();
include "db.php";
if ($_SERVER['REQUEST_METHOD']=="POST"){

	$vote=$_POST['like'];
	$email=$_SESSION['email'];
	$time=time();


	$select=mysqli_query($conn, "select * from vote where email='$email' and postid='$vote'");
	$num=mysqli_num_rows($select);
	if ($num>0) {
		$delect=mysqli_query($conn,"delete from vote where email='$email' and postid='$vote'");

	}

	else{
		$insertlikes=mysqli_query($conn," insert into vote(email,postid,time)value('$email','$vote','$time')");
	}
}





  ?>