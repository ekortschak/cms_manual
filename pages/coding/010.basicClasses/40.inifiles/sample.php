<?php

incCls("files/ini.php");

$ini = new ini("config/config.ini");
#$ini->readPath("path/to/inifile");
#$ini->read("path/to/other/xxx.ini");

$vls = $ini->getValues($sec);	// retrieve values set in $sec
$prp = $ini->get($key, $default); // retrieve a special value

?>
