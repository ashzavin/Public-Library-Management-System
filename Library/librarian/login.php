<?php

include "connect.php";




$id=$_POST["name"];
$password=$_POST["password"];




$array = oci_parse($c, "select Emp_id from employee where emp_id like '$id' and password like '$password' ");
oci_execute($array);

while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
    
    //$name= $row[0];
	session_start();
	$_SESSION['id']=$id;
	echo $_SESSION['id'];
	
	include "profile.php";
    
}

/*while ($row = oci_fetch_array($array, OCI_ASSOC+OCI_RETURN_NULLS)) {
   session_start();
	$_SESSION['id']=$id;
	
	include "profile.php";
	
   
   
}
*/
?>