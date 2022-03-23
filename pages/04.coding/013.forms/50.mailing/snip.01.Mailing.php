<?php

incCls("input/selector.php");
incCls("user/mail.php");

$arr = array(
	"preview" => "Preview",
	"test"    => "Send to TEST-Account",
	"send"    => "Send to recipient(s)"
);
$sub = array("Test: Feedback", "Test: Complaint", "Test: Order");
$abs = array("TESTMASTER" => "TEST-Account", "POSTMASTER" => "Web-Admin");

// ***********************************************************
$sel = new selector();
// ***********************************************************
$met = $sel->combo("Method", $arr);
$sbj = $sel->combo("Subject", $sub);
$frm = $sel->combo("From", $abs);
$rec = $sel->input("To", "you@yourdomain.com");
$msg = $sel->tarea("Message", "Hello from the internet!");
$act = $sel->xShow();

// ***********************************************************
if (! $act) return;
// ***********************************************************
$mel = new mail();
$mel->setSubject($sbj);
$mel->setMsg($msg);
$mel->setFrom($frm);
$mel->addRecipient($rec);
$mel->send($met);

?>
<h4>Info</h4>
<p>Please, check your mail box.</p>
