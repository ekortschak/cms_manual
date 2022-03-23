<?php

// ***********************************************************
incCls("menus/buttons.php");
// ***********************************************************
$dir = __DIR__;

$nav = new buttons("menu", "A", $dir);
$nav->add("A", "dummy");
$nav->add("B", "dummy");
$nav->add("C", "dummy");
$nav->show();

$nav->showContent();

?>
