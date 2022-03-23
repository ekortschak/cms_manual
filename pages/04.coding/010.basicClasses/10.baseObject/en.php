<p>Alle Objekte sind von der Basisklasse "objects" abgeleitet und
verfügen daher über folgende Methoden.</p>

<?php

// ***********************************************************
HTM::tag("Basic Methods");
// ***********************************************************
echo "<dl>";
HTM::def("set()", "store a value");
HTM::def("get()", "retrieve a value");
HTM::def("findVval()", "value or current key in an array");
echo "</dl>";

?>
<?php
HTM::code("./sample.php");
?>
