<?php

$arr = PFS::getMenu();

incCls("menus/menu.php");

$nav = new menu();
$nav->setData($arr);
$nav->show();

?>
