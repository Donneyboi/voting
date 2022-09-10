<?php session_start();
include "db.php";
if (1==1) {
	$email=$_POST['email'];
   $pass=$_POST['password'];

   if ($email=="") {
   	echo "input email";
   }

   else if ($pass=="") {
   	echo "input email";
   }
   else{
   	$tselect=mysqli_query($conn,"select * from signup where email='$email' and password='$pass'");
   	// 
   	 $nums=mysqli_num_rows($tselect);
   	 if ($nums<1) {
   	 	$select=mysqli_query($conn,"select * from admin where email='$email' and password='$pass'");
      $num=mysqli_num_rows($select);
      if ($num<1) {
       echo 1;
      }
      else{
       $_SESSION['admin']=$email ;
      }
      //echo "user not found";
   	 }
   	 else{
   	 	$_SESSION['email']=$email;
   	 	//echo "<script>window.location.href='index.html'</script>";
   	 	}
   	 /*
   	 	if () {
   	 	echo "<script>alert('".$_SESSION['student']."');window.location.href='index.html'</script>";
   	 	}
   */
      if (isset($_SESSION['admin']) or isset($_SESSION['email'])) {
      echo "<script>alert('welocome to voteme please dont vote twice or you might be restirted from the page')</script>";
   echo "<script>window.location.href='index.html'</script>";
      }

   	 }


}


  ?>