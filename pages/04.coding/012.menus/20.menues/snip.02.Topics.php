<?php

incCls("menus/tabs.php");

$nav = new tabs("menu.drop");
$nav->set("title", "Auswahl");
$nav->set("parm", "pge");
$nav->folders(dirname(__DIR__));
$nav->show();

?>
