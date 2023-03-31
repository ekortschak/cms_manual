<?php

incCls("dbase/dbInfo.php");

$dbl = new dbInfo("demo");
$inf = $dbl->tables();          // tables
$inf = $dbl->fields("demo");	// fields in table

$inf = $dbl->usrGroups();		// available user groups

?>
