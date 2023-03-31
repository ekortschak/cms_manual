<?php

incCls("menus/tabs.php");

$nav = new tabs();
$nav->readCfg();
$nav->show();

?>
