<?php session_start();
if (isset($_SESSION['email'])) {

echo "<style>

.hommpage{display:block}
.admin{display:none}
.forregister{display:none}


</style>";
}
if (isset($_SESSION['admin'])) {


echo "<style>

.hommpage{display: none}
.admin{display:block}
.forregister{display:none}

</style>";
	
}




 ?>