<?php

incCls("input/selector.php");

$sel = new selector();

$txt = $sel->input ("Simple Text", "Any text");
$eml = $sel->email ("EMail", "nobody@home.com");
$pwd = $sel->pwd   ("Password");
$num = $sel->input ("Number", 200);
$mem = $sel->tarea ("Memo", "Very, very long message ...", 3);
$inf = $sel->ronly ("Read Only", "Any value ... (hidden input)");
$inf = $sel->info  ("Info", "Any comment ...");

$act = $sel->xShow();

// ***********************************************************
if (! $act) return;
// ***********************************************************
echo "Button pressed ...";

?>
