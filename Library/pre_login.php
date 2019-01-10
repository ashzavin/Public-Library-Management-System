<?php

include "connect.php";



$category=$_POST["category"];
$id=$_POST["name"];
$password=$_POST["password"];

if($category=='1')
{
$array = oci_parse($c, "select name from user_sc where user_id like '$id' and password like '$password' ");
oci_execute($array);

while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
    
    //$name= $row[0];
	session_start();
	$_SESSION['id']=$id;
	
	include "user/profile.php";
    
}
}


else if($category=='2')
{
	$array = oci_parse($c, "select Emp_id from employee where emp_id like '$id' and password like '$password' and post like 'Administrative' ");
oci_execute($array);
//echo $category;
//echo $id;
//echo $password;
while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
    
    //$name= $row[0];
	session_start();
	$_SESSION['id']=$id;
	//echo 'boo';
	
	include "administrator/profile1.php";
    
}
}


else if($category=='3')
{
	$array = oci_parse($c, "select Emp_id from employee where emp_id like '$id' and password like '$password' and post like 'finance officer'");
oci_execute($array);


while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
    
    //$name= $row[0];
	session_start();
	$_SESSION['id']=$id;

	
	include "finance/profile.php";
    
}
}

else if($category=='4')
{
	$array = oci_parse($c, "select Emp_id from employee where emp_id like '$id' and password like '$password' and post like 'Project officer'");
oci_execute($array);

while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
    
    //$name= $row[0];
	session_start();
	$_SESSION['id']=$id;
	echo 'ok';
	
	include "project/profile3.php";
    
}
}

else if($category=='5')
{
	$array = oci_parse($c, "select Emp_id from employee where emp_id like '$id' and password like '$password' and post like 'Branch officer' ");
oci_execute($array);

while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
    
    //$name= $row[0];
	session_start();
	$_SESSION['id']=$id;
	
	include "branch/profile.php";
    
}
}

else if($category=='6')
{
	$array = oci_parse($c, "select Emp_id from employee where emp_id like '$id' and password like '$password' and post like 'Librarian'");
oci_execute($array);

while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
    
    //$name= $row[0];
	session_start();
	$_SESSION['id']=$id;
	
	include "librarian/profile2.php";
    
}
}



?>