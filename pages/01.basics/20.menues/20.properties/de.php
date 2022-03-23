

<p>Die Eigenschaften von Menüpunkten werden in Ini-Dateien im jeweiligen Ordner festgelegt.
So kann u.a. der anzuzeigende Titel sprachabhängig gestaltet werden.</p>

<p>Alle Ini-Dateien zur Menü-Steuerung heißen <dfn>page.ini</dfn>.</p>

<h4>Allgemeine Sektionen</h4>

<h5>[props]</h5>
<p>Folgende Eigenschaften werden unterstützt.</p>
<dl>
   <dt>typ</dt>
   <dd>legt fest, wie der Menüpunkt darzustellen ist. <a href="?pge=cmsMTypes">Mehr ...</a></dd>

   <dt>std</dt>
   <dd>gibt das Standard-Verzeichnis für den Menüpunkt an<br>
       gilt nur für: typ = root
   </dd>

   <dt>weitere</dt>
   <dd>abhängig vom gewählten "typ" können weitere Parameter vefügbar sein.
   </dd>
</dl>

<h4>Sprachabhänige Sektionen</h4>
<p>Es sollte sich für jede unterstützte Sprache ein Eintrag finden, <br>
z.B. die Sektion [de] für Deutsch.</p>
