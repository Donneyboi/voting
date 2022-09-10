<?php  
session_start();
session_destroy();
session_unset();
header("localhost:index.html");

?>