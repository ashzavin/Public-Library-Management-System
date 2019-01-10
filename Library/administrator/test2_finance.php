<?php

include "connect.php";
 
$name=$_POST["name"];
$salary=$_POST["salary"];
$join=$_POST["join"];
$post=$_POST["post"];
$email=$_POST["email"];
$address=$_POST["address"];
$phn1=$_POST["phn1"];
$office=$_POST["office"];
$project=$_POST["project"];
$branch=$_POST["branch"];




$r = oci_parse($c, "insert into employee(emp_id,emp_name,salary,joining_date,post,email,address,password) values(emp_id_seq.nextval,'$name','$salary','$join','$post','$email','$address',emp_password_seq.nextval) ");

oci_execute($r);
if($r)
{
	//echo "One row inserted";
}

$r2 = oci_parse($c, "insert into emp_phone (emp_id,phone) values (emp_id_seq.currval,'017186631977')");
oci_execute($r2);
if($r2)
{
	//echo "One row inserted";
}

if(isset($office) && $post=='Finance Officer')
{
		echo $office;
		$r3 = oci_parse($c, "insert into finance_officer (emp_id,office_no) values (emp_id_seq.currval,'$office') ");
		oci_execute($r3);
}

else if(isset($project) && $post=='Project Officer')
{
		$r3 = oci_parse($c, "insert into project_officer (emp_id,project_section) values (emp_id_seq.currval,'$projject')");
		oci_execute($r3);
}

else if(isset($branch) && $post=='Branch Manager')
{
		$r3 = oci_parse($c, "insert into project_officer (emp_id,project_section) values (emp_id_seq.currval,'$projject')");
		oci_execute($r3);
}


?>