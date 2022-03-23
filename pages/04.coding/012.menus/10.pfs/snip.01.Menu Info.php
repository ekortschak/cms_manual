<?php

incCls("menus/PFS.php");

$pfs = new PFS();
$pfs->readTree(__DIR__);
$arr = $pfs->getMenu();
$arr = array_slice($arr, 0, 3);

DBG::vector($arr, "MenuInfo");
HTM::tag("...", "p");

?>
