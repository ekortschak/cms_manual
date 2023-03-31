<?php

incCls("menus/dropBox.php");

$box = new dropBox("menu");
$dir = $box->folders(dirname(__DIR__));
$ful = $box->files($dir);
$xxx = $box->show();

echo "Chosen file = '$ful'";

?>
