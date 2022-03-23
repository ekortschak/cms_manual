<?php

incCls("input/selector.php");

$mdl = array("m1" => "Model 1", "m2" => "Model 2");

$sel = new selector();
$ren = $sel->combo ("Rename", $mdl, "m1");
$dst = $sel->input ("To", "$ren - xy");
$act = $sel->show();

// ***********************************************************
if (! $act) return;
// ***********************************************************
echo "Button pressed ...";

?>
