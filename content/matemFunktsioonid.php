<?php
echo "<h2>Matemaatilised tehted</h2>";
$a = 2.54;
$b = 4.20;

echo "Esimene arv on $a, teine arv on $b <br>";

echo "Liitmise tulemus: ".($a + $b)."<br>";
echo "Lahutamise tulemus: ".($a - $b)."<br>";
echo "Korrutamise tulemus: ".($a * $b)."<br>";
echo "Jagamise tulemus: ".($a / $b). "<br>";

echo "<h2>Matemaatilised funktsioonid</h2>";
echo "min(arv, arv2) - Väiksem arv: ".min($a, $b)."<br>";
echo "max(arv, arv2) - Suurem arv: ".max($a, $b)."<br>";
echo "round(arv) - Ümardamine täisarveni: ".round($a)."<br>";
echo "ceil(arv) - Ümardab järgmise arveni: ".ceil($a)."<br>";
echo "floor(arv) - Ümardab alla poole täisarveni: ".floor($a)."<br>";
echo "round(arv, 1) - Ümardab üks koma kohtani : ".round($a, 1)."<br>";

echo "rand() - Juhuslik arv: ".rand()."<br>";
echo "rand(min, max) - Juhuslik arv vahemikus: ".rand(10, 50)."<br>";

echo "pow(arv, arv2) - Astendamine: ".pow($a, 2)."<br>";
echo "sqrt(arv) - Ruutjuur: ".sqrt($a)."<br>";
echo "pi(): ".pi()."<br>";

echo "<h2>Omistamise operaatorid</h2>";
$x = 10;
$y = 20;
echo "x = $x, y = $y <br>";
$x++;
echo "\$x++ - Suurendab arv ühe võrra: $x <br>";
$x--;
echo "\$x-- - Vähendab arv ühe võrra: $x <br>";
$x *= $y;
echo "\$x *= \$y - Korrutamine y arvega: $x <br>";
$x /= $y;
echo "\$x /= \$y - Jagamine y arvega: $x <br>";

$nimi = "Artjom";
$perenimi = "Põldsaar";
echo "<br>Nimi on $nimi, perenimi on $perenimi<br>";
$nimi .= $perenimi;
echo "\$nimi .= \$perenimi - Paneb kaks tekstid kokku: $nimi <br>";

echo "printf(format, argumendid...)";
echo "<pre>printf(\"Tere %s %s, arv x: %d!\", \$perenimi, \$nimi, \$x);</pre>";
printf("Tere, %s %s, arv x: %d!", $perenimi, $nimi, $x);
echo "<br>";



