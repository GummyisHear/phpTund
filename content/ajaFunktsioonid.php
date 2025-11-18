<?php
echo "<h2>Ajafunktsioonid</h2>";
//timezone, juhul kui timezone ei ole määratud, siis php näitab localhost'i aeg
date_default_timezone_set('Europe/Tallinn');

echo "<div class='aja-container'>";

echo "<div class='aja-div'>";
echo "<h3>Ajafunktsioonid</h3>";
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezone list</a>";
echo "<br>";
echo "time() - Aeg sekundides: ".time();
echo "<br>";
echo "date() - Kuupäev: ".date("d.m.Y H:i:s", time());
echo "<br>";
echo "<pre>date('d.m.Y H:i:s', time()));</pre>";
echo "</div>";

echo "<div class='aja-div'>";
echo "<h3>date() argumendid</h3>";
echo "<pre>
d - päev (01...31)
m - kuu (01...12)
Y - aasta, nelja kohane arv
G - 24h format
i - minutid (0...59)
s - sekundid (0...59)
</pre>";
echo "</div>";

echo "<div class='aja-div'>";
echo "<h3>Tehted kuupäevaga</h3>";
echo "+1 min = time() + 60 <br>".date("d.m.Y H:i:s", time() + 60);
echo "<br>";
echo "+1 tund = time() + 60 * 60 <br>".date("d.m.Y H:i:s", time() + 60 * 60);
echo "<br>";
echo "+1 paev = time() + 60 * 60 * 24 <br>".date("d.m.Y H:i:s", time() + 60 * 60 * 24);
echo "</div>";

echo "<div class='aja-div'>";
echo "<h3>Kuupäeva genireerimine</h3>";
echo "mktime(tund, minuut, sekundid, kuu, paev, aasta)";
echo "<br>";
$synd = mktime(12, 30, 59, 2, 3, 2004);
echo "Minu sünnipäev: ".date("d.m.Y H:i:s", $synd);
echo "</div>";

echo "<div class='aja-div'>";
echo "<h3>Massiivi abil näidata kuu nimega</h3>";
$kuud = array(1=>'januaar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$aasta = date("Y");
$paev = date("d");
$kuu = $kuud[date("m")];
echo "Täna on: ".$paev.".".$kuu.".".$aasta;
echo "</div>";
echo "</div>";

