



<?php
/*include "front.php";*/
$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST
= localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ;
$c=OCILogon("library", "ash", $db);

?>