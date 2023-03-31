<?php

incCls("dbase/recEdit.php");

// ***********************************************************
$dbe = new recEdit($table);
$dbe->findRec();
$dbe->permit("a");
$dbe->show();

?>
