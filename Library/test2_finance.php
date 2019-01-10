<?php

include "connect.php";
 
$year=$_POST["year"];
$utilities=$_POST["utilities"];
$branch=$_POST["branch"];
$books=$_POST["books"];
$renovation=$_POST["renovation"];
$salary=$_POST["salary"];
$project=$_POST["project"];





$r = oci_parse($c, "insert into budget values('$year','$utilities','$branch','$books','$renovation','$salary','$project') ");
oci_execute($r);
if($r)
{
	echo "One row inserted";
}


?>