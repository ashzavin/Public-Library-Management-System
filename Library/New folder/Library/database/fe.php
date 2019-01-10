

<?php
include "connect.php";
/*$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$c=OCILogon("library", "ash", $db);*/


//$array = oci_parse($c, "SELECT title ||'The price of the book is '|| price ||'.The book is on about '|| subject 
//|| '& total available books is '|| t_book from book_list" );

$array = oci_parse($c, "SELECT title, price, subject,t_book from book_list" );

oci_execute($array);

while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
    $title= $row[0] ;
    echo $row[1] ;
	echo $row[2] ;
	echo $title;
    
	
}

?>
