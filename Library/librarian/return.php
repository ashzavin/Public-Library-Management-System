<?php

include "connect.php";
$user_name=$_POST["user_name"];
$user_id=$_POST["user_id"];
$title=$_POST["title"];
$book_no=$_POST["book_no"];

$r = oci_parse($c, "delete from book_borrower where book_no='$book_no' and (present_date)<due_date");
 
oci_execute($r);
if($r)
{
	//echo "One row inserted";
}

else
{
	echo "due has not been cleared!!!";
}





?>