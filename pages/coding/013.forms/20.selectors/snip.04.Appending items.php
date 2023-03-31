<?php

incCls("input/selector.php");

$mdl = array("m1" => "Model 1", "m2" => "Model 2");
$ver = array(1, 2, 3);

// ***********************************************************
// input by mouse click(s)
// ***********************************************************
$sel = new selector();
$sel->register(__FILE__); // needed only when there are multiple scripts in one directory

$cmb = $sel->combo ("Combo", $mdl, "v1");
$xxx = $sel->glue  ("Combo", "Version: ");
$ver = $sel->combo ("Combo", $ver, 1);

$act = $sel->xShow();

// ***********************************************************
if (! $act) return;
// ***********************************************************
echo "Button pressed ...";

?>
