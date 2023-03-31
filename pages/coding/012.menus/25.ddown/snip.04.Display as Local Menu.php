<?php

incCls("menus/dropBox.php");

$mdl = array("A" => "Model A", "B" => "Model B", "C" => "Model C");
$ver = array("1.0" => "Version 1.0", "1.4" => "Version 1.4", "2.0" => "Version 2.0");

$box = new dropBox("menu")();
$mdl = $box->getKey("model", $mdl);
$ver = $box->getKey("version", $ver);
$xxx = $box->show();

echo "<hr>";
echo "Current selection: $mdl - $ver";
echo "<hr>";

?>
