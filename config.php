<?php

include_once("config/basics.php");
include_once("core/inc.min.php");
include_once("core/inc.more.php");

if (! FS_ADMIN) {
	HTM::cap("This is not your localhost.", "p");
	return incMod("body/login.php");
}

incFnc("pagemaker.php");

?>
