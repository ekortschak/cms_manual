<?php

incCls("dbase/dbAlter.php");

$ddl = new dbAlter($table);
$ddl->setTable($other_table);

$ddl->t_add();				// create table given in constructor
$ddl->t_copy($newTable);	// copy table to $newName
$ddl->t_rename($newName);
$ddl->t_sort($field);		// sort table by $field
$ddl->t_drop();
$ddl->t_trunc();

$ddl->f_add($field, $type, $len, $default, $mayNull);
$ddl->f_rename($field, $new);
$ddl->f_modify($field, $type, $len, $default, $mayNull);
$ddl->f_move($field, $after);
$ddl->f_drop($field);

?>
