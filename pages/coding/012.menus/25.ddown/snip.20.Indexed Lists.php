<?php

incCls("menus/dropNav.php");

$arr = array(
	"red" => "Apple",
	"yellow" => "Banana",
	"green" => "Melon"
);

$box = new dropNav();
$key = $box->getKey("fruit", $arr);
$val = $box->decode("fruit", $key);
$xxx = $box->show();

echo "<p>'$val' is '$key'</p>";

?>
