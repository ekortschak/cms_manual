<?php

$loc = ENV::get("loc");
$ext = "jpg, png, gif";

// ***********************************************************
incCls("files/dirView.php");
// ***********************************************************
$obj = new dirView();
$obj->read("design/templates/modules/fview.mimetype.tpl");
$obj->setSort("asc");
$obj->readTree($loc, $ext);
$obj->show();

?>
