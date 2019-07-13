<?php
	header("Content-type: text/html; charset=utf-8");
	
	if ($_COOKIE["id"])
  {
	  
    unset($_COOKIE["id"]);
    setcookie("id", "", time() - 3600, "/"); // empty value and old timestamp
}
header("Location:../index.php"); 
?>


