<?php

// ***********************************************************
incCls("menus/buttons.php");
// ***********************************************************
$dir = __DIR__;

$nav = new buttons("menu", "F", $dir);
$nav->add("D", "doFolders", "folder");
$nav->add("F", "doFiles",   "edit");
$nav->add("P", "doProps",   "props");
$nav->show();

?>
