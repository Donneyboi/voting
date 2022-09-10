<?php session_start();
include "db.php";
if (1==1) {
	$email=$_POST['email'];
	$nin=$_POST['nin'];
	$pass=$_POST['password'];
	$cpass=$_POST['cpassword'];

   if ($email=="") {
   	 echo "email is empty";
   }

    else if ($nin=="") {
   	 echo " Your NIN is empty";
   }
     else if ($pass=="") {
   	 echo " password is empty";
   }
     else if ($pass!=$cpass) {
   	 echo "password not match";
   }
   else{
   	$select=mysqli_query($conn,"select * from signup where email='$email'");
   	$num=mysqli_num_rows($select);
   	if ($num>0) {
    echo "email already exit";
   	}
   	else{
   		$inset=mysqli_query($conn," insert into signup(email,nin,password)values('$email','$nin','$pass')");
      if ($inset) {
       $_SESSION['email']=$email;
         echo "<script>alert('welocome to voteme')</script>";
      echo "<script>window.location.href='index.html'</script>";

      }
    
   	}
   }
}





 ?>