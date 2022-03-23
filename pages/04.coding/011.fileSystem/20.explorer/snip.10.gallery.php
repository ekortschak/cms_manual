<?php

$loc = ENV::get("loc");
$ext = "jpg, png, gif";

// ***********************************************************
incCls("files/dirView.php");
// ***********************************************************
$obj = new dirView();
$obj->read("design/templates/modules/fview.gallery.tpl");
$obj->setSort("desc");
$obj->readTree($loc, $ext);
$obj->show();

?>
