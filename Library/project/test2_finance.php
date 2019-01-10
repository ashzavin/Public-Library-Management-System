<?php

include "connect.php";
 
$project=$_POST["project"];
$start=$_POST["start"];
$cate=$_POST["cate"];
$archi=$_POST["archi"];
$budg=$_POST["budg"];






$r = oci_parse($c, "insert into project values('$project','$budg',to_date('$start','dd-mon-yyyy'),'$cate','$archi') ");
oci_execute($r);
if($r)
{
	echo "One row inserted";
}


?>