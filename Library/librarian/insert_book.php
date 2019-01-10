<?php

include "connect.php";
$title=$_POST["title"];
$price=$_POST["price"];
$subject=$_POST["subject"];
$no=$_POST["no"];


//$array3 = oci_parse($c, "select price from book_list where title='$title'");

//oci_execute($array3);

//if(empty($array3))
//{
	$r = oci_parse($c, "insert into librarian_view values('$title',$price,'$subject',1,1,'$no')");
	oci_execute($r);
	
	echo "iiiifdcvcvbvvbbv";
//}

/*else
{
	
	
	
	
	$array5 = oci_parse($c, "update book_list
	set t_book=(select count(*) from book_no_multi where title='Compilers')+1
	where title='$title'"); 
    oci_execute($array5);
	if($array5)
	{
	//echo "One row inserted";
	}
	
}*/
								
								
?>