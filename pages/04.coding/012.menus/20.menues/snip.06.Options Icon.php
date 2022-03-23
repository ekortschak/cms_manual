<?php

incCls("menus/dropbox.php");

$arr = array("A" => "Item A", "B" => "Item B", "C" => "Item C");

$box = new dbox();
$key = $box->getKey("any", $arr);
$box->show("icon");

echo "<hr>";
echo "Current selection: $key";
echo "<hr>";

?>
