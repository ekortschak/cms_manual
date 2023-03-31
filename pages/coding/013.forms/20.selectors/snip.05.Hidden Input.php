<?php

incCls("input/selector.php");

$sel = new selector();
$sel->register(__FILE__); // needed only when there are multiple scripts in one directory

$vis = $sel->input  ("Visible", "Visible input ...");
$hid = $sel->hidden ("Hidden", "Hidden input ...");
$act = $sel->xShow();

// ***********************************************************
if (! $act) return;
// ***********************************************************
echo "Button pressed ...";

?>
