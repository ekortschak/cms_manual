<?php

incCls("input/selector.php");

$arr = array(
	"opt1" => "Option 1",
	"opt2" => "Option 2",
	"opt3" => "Option 3",
	"opt4" => "Option 4",
	"opt5" => "Option 5",
);

$vls = array(
	"opt1" => 0,
	"opt2" => 1,
	"opt3" => 1,
	"opt4" => 0,
	"opt5" => 0,
);

$sel = new selector();
$sel->register(__FILE__); // needed only when there are multiple scripts in one directory

$vis = $sel->multi("Multi", $arr, $vls);
$act = $sel->xShow();

// ***********************************************************
if (! $act) return;
// ***********************************************************
echo "Button pressed ...";

?>
