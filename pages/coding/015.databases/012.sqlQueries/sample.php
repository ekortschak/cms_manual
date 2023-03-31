<?php

incCls("dbase/dbQuery.php");

$dbq = new dbQuery($table);

$dbq->setFields("field1, field2");
$dbq->setOrder("field1, field2");

$filter = "ID=1";
$values = array(
	$field1 = "value1",
	$field2 = "value2"
);

$arr = $dbq->query($filter); 	// return 1st record found
$chk = $dbq->isTable("demo");
$chk = $dbq->isField("demo", "ID");

$dbq->replace($values, $filter);	// insert or replace
$dbq->insert($values);			// insert data
$dbq->update($values, $filter);	// update record
$dbq->delete($filter);			// delete record

?>
