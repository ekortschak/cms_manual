
<?php
// use paths relative to app root or fallback root
$tpl_1 = "LOC_TPL/input/selector.tpl";
$tpl_2 = "LOC_TPL/input/recEdit.tpl";

$tpl = new tpl();
$tpl->read($tpl_1); // load a template file
$tpl->read($tpl_2); // second file will take precedence over first
$tpl->show();

$tpl->set("any", "string");    // set a variable<u>

$lin = $tpl->getSection($nam); // get final section code

?>
