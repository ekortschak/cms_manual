<?php

incCls("input/selector.php");

$mdl = array("m1" => "Model 1", "m2" => "Model 2");
$ltr = array("A", "B", "C");
$ltr = range(1, 3);

// ***********************************************************
// input by mouse click(s)
// ***********************************************************
$sel = new selector();
$sel->register(__FILE__); // needed only when there are multiple scripts in one directory

$dat = $sel->date  ("Date", date("Y-m-d"));
$cmb = $sel->combo ("Combo", $mdl, "v1");
$chk = $sel->check ("Check Box");
$col = $sel->color ("Color", "#ffff00");
$opt = $sel->radio ("Options", $ltr, "-1");
$rng = $sel->range ("Range", 2, 1, 5);
$img = $sel->image ("Image", 3, "ICONS/input/rating.png");

$act = $sel->xShow();

// ***********************************************************
if (! $act) return;
// ***********************************************************
echo "Button pressed ...";

?>
