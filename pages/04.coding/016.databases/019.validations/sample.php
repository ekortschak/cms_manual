
<?php
incCls("dbase/tblValidate.php");

// ***********************************************************
// BEGIN OF CLASS
// ***********************************************************
class tblxyz extends tblValidate {

function __construct($tbl) {
   parent::__construct($tbl);
}

// ***********************************************************
// checking values before writing to DB
// ***********************************************************
protected function chkVal($inf, $fld, $val) { return true; }

// ***********************************************************
// checking dependencies
// ***********************************************************
public function b4Ins($vls)       { return true; }
public function b4Upd($vls, $qid) { return true; }
public function b4Del($vls, $qid) { return true; }

// ***********************************************************
// clean up after writing to DB, e.g. referential integrity
// ***********************************************************
public function onIns($vls, $lid) { }
public function onUpd($vls, $flt) { }
public function onDel($vls, $flt) { }

// ***********************************************************
} // END OF CLASS
// ***********************************************************
?>
