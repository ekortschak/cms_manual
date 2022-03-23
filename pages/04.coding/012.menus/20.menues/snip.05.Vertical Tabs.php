<?php

incCls("menus/tabs.php");

$arr = FSO::folderTitles(dirname(__DIR__));
$arr = array_slice($arr, 0, 2);

$nav = new tabs("tabs");
$nav->set("parm", "pge"); // parameter in link url
$nav->setRecs($arr);
$nav->show();

?>
