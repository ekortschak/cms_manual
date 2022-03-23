
<?php
DBS::exec($sql);
DBS::fetch($sql);
DBS::fetch1st($sql);

DBS::tblInfo($table); // dbo properties
DBS::fldInfo($table, $field);

DBS::tblPerms($table); // user specific information
DBS::fldPerms($table, $field);

DBS::isUser($user, $pwd);
DBS::isAdmin($user, $pwd);
?>