<?php

$arr = PFS::getMenu();
$arr = array_slice($arr, 0, 18);

incCls("menus/menu.php");

$nav = new menu();
$nav->setData($arr);
$nav->show();

?>
