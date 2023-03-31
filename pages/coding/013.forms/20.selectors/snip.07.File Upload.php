<?php

incCls("input/selector.php");

$sel = new selector();
$sel->register(__FILE__); // needed only when there are multiple scripts in one directory

$sel->set("max", 1500000);
$sel->set("ext", "video/*");

$vis = $sel->upload("Upload");
$act = $sel->xShow();

// ***********************************************************
if (! $act) return;
// ***********************************************************
echo "Button pressed ...";

?>
