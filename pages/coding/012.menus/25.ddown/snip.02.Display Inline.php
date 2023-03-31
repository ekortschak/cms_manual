<?php

incCls("menus/dropBox.php");

echo "Folder ";

$box = new dropBox();
$dir = $box->folders(dirname(__DIR__));
$box->show("inline");

echo "contains these files: ";

$fil = $box->files($dir);
$box->show("inline");

?>
