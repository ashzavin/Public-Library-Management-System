<?php

include "connect.php";
 
$name=$_POST["name"];
$location=$_POST["location"];
$city=$_POST["city"];
$email=$_POST["email"];
$phn1=$_POST["phn1"];
$phn2=$_POST["phn2"];
$pswrd=$_POST["pswrd"];




$r = oci_parse($c, "insert into user_sc (name,location,city,user_email,password) values ('$name','$location','$city','$email','$pswrd')");
oci_execute($r);
if($r)
{
	echo "One row inserted";
}


echo 'hiiiiiiiiiiiiiii';

$r2 = oci_parse($c, "insert into user_phone (name,phone_no) values ('$name','$phn1')");
oci_execute($r2);
if($r2)
{
	echo "One row inserted";
}

$r3 = oci_parse($c, "insert into user_phone (name,phone_no) values ('$name','$phn2')");
oci_execute($r3);
if($r3)
{
	echo "One row inserted";
}
?>