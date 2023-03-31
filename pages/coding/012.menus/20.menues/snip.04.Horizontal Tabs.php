repair me

<?php
return;

incCls("menus/tabs.php");

$arr = FSO::folderTitles(dirname(__DIR__));

$nav = new tabs("tabs.top");
$nav->set("parm", "pge"); // parameter in link url
$nav->setRecs($arr);
$nav->show();

?>
