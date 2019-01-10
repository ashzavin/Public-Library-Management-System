<?php

include "connect.php";




$id=$_POST["name"];
$password=$_POST["password"];




$array = oci_parse($c, "select name from user_sc where user_id like '$id' and password like '$password' ");
oci_execute($array);

while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
    
    //$name= $row[0];
	session_start();
	$_SESSION['id']=$id;
	
	include "profile.php";
    
}
?>