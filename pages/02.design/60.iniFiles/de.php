

<h4>Aufbau</h4>
<p>Ini-Datei beinhalten Wertepaare, die in Gruppen zusammengefaßt werden können.</p>

<msg>Für Kommentare wird "#" verwendet.<br>
Soll "#" nicht als Kommentarzeichen interpretiert werden, verwenden Sie "\#".</msg>


<h4>Wertepaare</h4>
<p>Grundsätzlich ist jede Zeile ein eigener Eintrag der Form:</p>
<code>key = value</code>

<p>Groß-/Kleinschreibung ist zumindest für "keys" irrelevant.</p>

<p>Bei besonders langen Werten, kann es sinnvoll sein, diese auf mehrere Zeilen aufzuteilen.
In diesem Fall muß am Ende jeder Zeile der Zeilenumbruch durch "_" unterdrückt werden.
Beim Einlesen werden solche Zeilen wieder zu einer Zeile zusammengehängt.</p>

<h4>Print Parameter</h4>
<p>beeinflussen ausschließlich das Verhalten beim Ausdruck in eine Sammeldatei und können
mitunter sprachabhängig gehandelt werden.</p>

<?php
HTM::code("./sample.ini", "Demo-Ini");
?>