<?php
function clearVarsExcept($url, $varname) {
    $url = basename($url);
    if (str_starts_with($url, "?")) {
        return "?$varname=$_REQUEST[$varname]";
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}

?>

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

echo "<h2>Arv mõistatus, mõista kaks arve vahemikus (10-30)</h2>";

if (isset($_POST['arv1']) && isset($_POST['arv2'])) {
    $arv1 = $_POST['arv1'];
    $arv2 = $_POST['arv2'];
} else {
    $arv1 = rand(10, 30);
    $arv2 = rand(10, 30);
}

if ($arv1 > $arv2) {
    echo "Arv 1 > Arv 2<br>";
} else if ($arv1 == $arv2) {
    echo "Arv 1 == Arv 2<br>";
} else {
    echo "Arv 1 < Arv 2<br>";
}

echo "Arve summa on: ".($arv1 + $arv2)."<br>";

echo "Esimene arv on ".($arv1 % 2 == 0 ? "paaris" : "paaritu").
    ", teine arv on ".($arv2 % 2 == 0 ? "paaris" : "paaritu")."<br>";

echo "Esimene arv on vahemikus (".($arv1 - rand(1, 3))."-".($arv1 + rand(1, 3)).")<br>";

echo "Teine arv saab jagada ";
if ($arv2 % 9 == 0) { echo "9-ga"; }
else if ($arv2 % 8 == 0) { echo "8-ga"; }
else if ($arv2 % 7 == 0) { echo "7-ga"; }
else if ($arv2 % 6 == 0) { echo "6-ga"; }
else if ($arv2 % 5 == 0) { echo "5-ga"; }
else if ($arv2 % 4 == 0) { echo "4-ga"; }
else if ($arv2 % 3 == 0) { echo "3-ga"; }
else if ($arv2 % 2 == 0) { echo "2-ga"; }
else if ($arv2 % 1 == 0) { echo "1-ga (arv on algarv)"; }
echo "<br>";
?>

<br>
<form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method="post">
    <input type='hidden' name='link' value='matemFunktsioonid.php'>
    <input type="hidden" name="arv1" value="<?= $arv1 ?>">
    <input type="hidden" name="arv2" value="<?= $arv2 ?>">

    <label for='vastus1'>Esimene arv: </label>
    <input type='number' name='vastus1' placeholder='Sinu mõiste' min='10' max='30'><br>
    <label for='vastus1'>Teine arv: </label>
    <input type='number' name='vastus2' placeholder='Sinu mõiste' min='10' max='30'><br>
    <input type='submit'>
</form>

<?php
if (isset($_REQUEST["vastus1"]) && isset($_REQUEST["vastus2"])) {
    $vastus1 = $_REQUEST["vastus1"];
    $vastus2 = $_REQUEST["vastus2"];
    if ($vastus1 == $arv1 && $vastus2 == $arv2) {
        echo "<strong>Õige vastus!</strong>";
        unset($_SESSION['arv1'], $_SESSION['arv2']);
    } else {
        echo "<strong>Vale vastus...</strong>";
    }
}
?>