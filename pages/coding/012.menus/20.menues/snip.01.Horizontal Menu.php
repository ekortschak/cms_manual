<?php

$arr = PFS::items();

incCls("menus/menu.php");

$nav = new menu();
$nav->setData($arr);
$nav->show();

?>
