<?php

incCls("system/cmd.php");

// ***********************************************************
// execute command
// ***********************************************************
$cmd = new cmd();
$cmd->exec("pwd");
$cmd->show();

?>
