<?php

include "connect.php";
$user_name=$_POST["user_name"];
$user_id=$_POST["user_id"];
$issue=$_POST["issue"];
$title=$_POST["title"];
$book_no=$_POST["book_no"];
session_start();
$emp_id=$_SESSION['id'];




//session_start();
//echo $_SESSION['id'];
//$emp_id=$_SESSION['id'];
//echo $emp_id;

$r = oci_parse($c, "insert into book_borrower(borrow_no,issue_date)
values(borrower_id_seq.nextval,to_date('$issue','dd-mon-yyyy'))
 ");
 
oci_execute($r);
if($r)
{
	//echo "One row inserted";
}


$r2 = oci_parse($c, "insert into borrowed_book(book_no,borrow_no)
values('$book_no',borrower_id_seq.currval)");
oci_execute($r2);
if($r2)
{
	//echo "One row inserted";
}

$r3 = oci_parse($c, "insert into given_by(emp_id,borrow_no)
values('$emp_id',borrower_id_seq.currval)");
oci_execute($r3);
if($r3)
{
	//echo "One row inserted";
}

$r4 = oci_parse($c, "insert into borrower(name,borrow_no)
values('$user_name',borrower_id_seq.currval)");
oci_execute($r4);
if($r4)
{
	//echo "One row inserted";
}



?>