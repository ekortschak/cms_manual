<?php

incCls("menus/dropbox.php");

echo "Folder ";

$box = new dbox();
$dir = $box->folders(dirname(__DIR__));
$box->show("inline");

echo "contains these files: ";

$fil = $box->files($dir);
$box->show("inline");

?>
