

 <?php session_start();
include "db.php";
if (isset($_POST['postex'])) {
	$postext=$_POST['postext'];
	$email=$_SESSION['admin'];
	$time=time();

	if ($postext=="" and $_FILES['myfiles']=="") {
		
	}
	else {
		$insertpost=mysqli_query($conn," insert into post(email,message,time)values('$email','$postext','$time')");
		$lastid=mysqli_insert_id($conn);
		if ($lastid>0) {
		 if ($_FILES['myfiles']=="") {
		 	
		 }
		 else{


		 	
		 	$rand=mt_rand().mt_rand();
		 	$filename=mt_rand().$_FILES['myfiles']['name'];
		 	$folder="img/";
		 	$mainfile=$folder.$rand.$filename;
		 	$mainfile2=$rand.$filename;
		 	$filename2=$_FILES['myfiles']['tmp_name'];
             
             if (move_uploaded_file($filename2, $mainfile)) {
             	$insertpic=mysqli_query($conn,"insert into adminimage(imagename,postid,time)values('$mainfile2','$lastid','$time')");
             	
             }

		 	
		 }
		}
	}
}


 ?>