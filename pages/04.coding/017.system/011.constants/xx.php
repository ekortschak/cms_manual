
<?php

$arr = KONST::groups();

// ***********************************************************
incCls("menus/dropbox.php");
// ***********************************************************
$box = new dbox();
$cat = $box->getKey("Constants", $arr, "user");
$act = $box->show("menu");

$arr = KONST::getList($cat); // sensible data are hidden

// ***********************************************************
incCls("tables/htm_table.php");
// ***********************************************************
$tbl = new htm_table();
$tbl->setLines(100);
$tbl->addArray($arr);
$tbl->show();

?>
