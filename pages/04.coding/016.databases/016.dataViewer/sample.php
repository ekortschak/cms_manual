<?php

incCls("dbase/tblView.php");

// ***********************************************************
// data viewer
// ***********************************************************
$dbt = new tblView($table);
$dbt->setTable($table, "$field LIKE '%a%'");
$dbt->show();

?>
