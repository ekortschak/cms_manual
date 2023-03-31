<?php

incCls("dbase/tblMgr.php");

// ***********************************************************
// show data
// ***********************************************************
$few = new tblMgr();
$few->setTable($tbl);
$few->setFilter($fld);
$few->permit("w");
$few->show();

?>
