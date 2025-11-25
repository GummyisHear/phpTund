<?php

echo "<h2>Faili Kirjutamine</h2>";
echo "fopen(filename, mode) - Kasutame et faili avada, mode peaks olema 'w' nagu <i>write</i>, et kirjutada. ";
echo '<pre>$file = fopen("minufail.txt", "w");</pre>';

$file = fopen("minufail.txt", 'w');

fwrite($file, "minu tekst");
fwrite($file, "tekst 2");

fclose($file);

//avab, kirjutab, sulgeb
file_put_contents("minufail.txt", "uus tekst 3", FILE_APPEND);

// kustutab faili
unlink('minufail.txt');

//ümbernimetab
//rename('minufail.txt','uusnimi.txt');

$minu_fail = fopen("content/loomad.txt", 'r');

$faili_sisu = fread($minu_fail, 30);
echo $faili_sisu;
fclose($minu_fail);