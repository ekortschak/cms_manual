<?php

incCls("menus/drop.php");

$arr = array("A" => "Item A", "B" => "Item B", "C" => "Item C");

$box = new dropBox();
$key = $box->getKey("any", $arr);
$box->show("icon");

echo "<hr>";
echo "Current selection: $key";
echo "<hr>";

?>
