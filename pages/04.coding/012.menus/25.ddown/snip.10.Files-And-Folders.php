<?php

incCls("menus/dropbox.php");

$box = new dbox();
$dir = $box->folders(dirname(__DIR__));
$ful = $box->files($dir);
$xxx = $box->show("menu");

echo "Chosen file = '$ful'";

?>
