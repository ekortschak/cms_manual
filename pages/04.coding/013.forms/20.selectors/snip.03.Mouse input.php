<?php

incCls("input/selector.php");

$mdl = array("v1" => "Model 1", "v2" => "Model 2");
$ver = array(1, 2, 3);
$ltr = array("A", "B", "C");
$ltr = range(1, 3);

// ***********************************************************
// input by mouse click(s)
// ***********************************************************
$sel = new selector();

$cmb = $sel->combo ("Choice", $mdl, "v1");
$cmb = $sel->glue  ("Choice", "Version:");
$ver = $sel->combo ("Choice", $ver, 1);
$pwd = $sel->date  ("Date", date("Y-m-d"));
$chk = $sel->check ("Check Box");
$opt = $sel->radio ("Options", $ltr, "-1");
$rng = $sel->range ("Range", 2, 1, 5);
$col = $sel->color ("Color", "#ffff00");
$img = $sel->image ("Image", 3, "core/icons/input/rating.png");

$act = $sel->xShow();

// ***********************************************************
if (! $act) return;
// ***********************************************************
echo "Button pressed ...";

?>
