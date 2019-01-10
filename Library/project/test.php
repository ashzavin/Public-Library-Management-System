<?php

include "connect.php";
 
$name=$_POST["name"];
$address=$_POST["address"];
$email=$_POST["email"];
$join_date=$_POST["join_date"];
$salary=$_POST["salary"];
$phn1=$_POST["phn1"];
$phn2=$_POST["phn2"];
$pswrd=$_POST["pswrd"];
$office_nmbr=$_POST["office_nmbr"];
session_start();
echo $_SESSION['id'];
$emp_id=$_SESSION['id'];
echo $emp_id;



$r = oci_parse($c, "update employee set emp_name='$name',salary='$salary',joining_date='$join_date',email='$email',address='$address' ,password='$pswrd' where emp_id='$emp_id' ");
oci_execute($r);
if($r)
{
	//echo "One row inserted";
}

$r2 = oci_parse($c, "insert into emp_phone (emp_id,phone) values ('$emp_id','$phn2')");
oci_execute($r2);
if($r2)
{
	//echo "One row inserted";
}


$r3 = oci_parse($c, "insert into emp_phone (emp_id,phone) values ('$emp_id','$phn2')");
oci_execute($r3);
if($r3)
{
	//echo "One row inserted";
}


$r4 = oci_parse($c, "update finance_officer set office_no='$office_nmbr' where emp_id='$emp_id' ");
oci_execute($r4);
if($r4)
{
	//echo "One row inserted";
}
?>