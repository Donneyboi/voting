<?php session_start();
include "db.php";
if (1==1) {
	$votename=$_POST['winnername'];
	$email=$_SESSION['admin'];
	$time=time();

	if ($votename=="" and $_FILES['myfile']=="") {
		
	}
	else {
		$insertpost=mysqli_query($conn," insert into winnername(email,name,time)values('$email','$votename','$time')");
		$lastid=mysqli_insert_id($conn);
		if ($lastid>0) {
		 if ($_FILES['myfile']=="") {
		 	
		 }
		 else{


		 	
		 	$rand=mt_rand().mt_rand();
		 	$filename=mt_rand().$_FILES['myfile']['name'];
		 	$folder="img/";
		 	$mainfile=$folder.$rand.$filename;
		 	$mainfile2=$rand.$filename;
		 	$filename2=$_FILES['myfile']['tmp_name'];
             
             if (move_uploaded_file($filename2, $mainfile)) {
             	$insertpic=mysqli_query($conn,"insert into winnerimage(imagename,postid,time)values('$mainfile2','$lastid','$time')");
             	
             }

		 	
		 }
		}
	}
}


 ?>