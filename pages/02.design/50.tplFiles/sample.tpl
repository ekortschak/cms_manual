[include]
design/templates/input/selector.tpl

[vars]
lines = 9

[dic.de]
title = Beispiel

[dic.en]
title = Example

[main]
<h4><i><!DIC:title!></i></h4>
<p><!VAR:lines!> Lines</p>

<!SEC:subsection!>
<!SEC:xxc!>

[subsection]
<p>Any HTML-Code ...</p>

[xxs.de]
Wird angezeigt, wenn Deutsch die aktuelle Sprache ist

[xxs.en]
Will be displayed, if English is the current language
