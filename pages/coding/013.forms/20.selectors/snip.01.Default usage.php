<?php

incCls("input/selector.php");

$mdl = array("m1" => "Model 1", "m2" => "Model 2");

$sel = new selector();
$sel->register(__FILE__); // needed only when there are multiple scripts in one directory

$ren = $sel->combo ("Rename", $mdl, "m1");
$dst = $sel->input ("To", "$ren - xy");
$act = $sel->xShow();

// ***********************************************************
if (! $act) return;
// ***********************************************************
echo "Button pressed ...";

?>
