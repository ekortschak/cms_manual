<?php

incCls("files/fileInfo.php");

$fil = FSO::join(__DIR__, "pic.jpg");

$fso = new fileInfo($fil);
$inf = $fso->getValues();

DBG::vector($inf);

?>
