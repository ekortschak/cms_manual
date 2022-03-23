
<?php

$arr = array(
	"SRV"  => "Server",
	"SESS" => "Session Vars",
/*	"REQ"  => "URL-Request",
	"POST" => "Post Vars",
	"GET"  => "Get Vars", */
	"ENV"  => "Environment"
);

// ***********************************************************
incCls("menus/dropbox.php");
// ***********************************************************
$box = new dbox();
$cat = $box->getKey("Globals", $arr);
$act = $box->show("menu");

switch ($cat) {
	case "SRV":  $arr = $_SERVER;  unset($arr["HTTP_COOKIE"]); break;
	case "REQ":  $arr = $_REQUEST; break;
	case "SESS": $arr = $_SESSION[APP_FILE]; break;
	case "POST": $arr = $_POST;    break;
	case "GET":  $arr = $_GET;     break;
	default:     $arr = $_ENV;
}

ksort($arr);

// ***********************************************************
HTM::tag($cat);
// ***********************************************************
?>

<table>

<?php
$lin = "<tr><td>%s</td><td>=</td><td>%s</td></tr>";

foreach ($arr as $key => $val) {
	echo sprintf($lin, $key, VEC::toString($val));
}

?>

</table>
