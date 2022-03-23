<?php

incCls("dbase/tblFilter.php");

// ***********************************************************
// data filter
// ***********************************************************
$sel = new tblFilter($table); // filter
$sel->addFilter("$field > 100");
$sel->show();

echo $sel->getFilter();

?>
