<?php

incCls("menus/dropnav.php");

$arr = array(
	"red" => "Color",
	"yellow" => "Banana",
	"green" => "Melon"
);

$box = new dropnav();
$key = $box->getKey("fruit", $arr);
$val = $box->decode("fruit", $key);
$xxx = $box->show();

echo "<p>Fruit '$val' is of color = '$key'</p>";

?>
