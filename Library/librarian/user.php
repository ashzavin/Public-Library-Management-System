<?php

include "connect.php";
 
$name=$_POST["name"];
$location=$_POST["location"];
$city=$_POST["city"];
$email=$_POST["email"];
$phn1=$_POST["phn1"];



//session_start();
//echo $_SESSION['id'];
//$emp_id=$_SESSION['id'];
//echo $emp_id;



$r = oci_parse($c, "insert into user_sc(name,location,city,user_id,user_email,password) values('$name','$location','$city',user_id_seq.NEXTVAL,'$email',password_seq.nextval) ");
oci_execute($r);
if($r)
{
	//echo "One row inserted";
}
$r2 = oci_parse($c, "insert into user_phone (name,phone_no) values ('$name','$phn1')");
oci_execute($r2);
if($r2)
{
	//echo "One row inserted";
}


/*$r3 = oci_parse($c, "insert into emp_phone (emp_id,phone) values ('$emp_id','$phn2')");
oci_execute($r3);
if($r3)
{
	echo "One row inserted";
}*/


/*$r4 = oci_parse($c, "update librarian set shelf_no='$shelf_no',bok_no='$book_no',emp_id='$emp_id' where emp_id='$emp_id' ");
oci_execute($r4);
if($r4)
{
	echo "One row inserted";
}*/
?>