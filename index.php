<?php
    $sisi1 = 10;
    $sisi2 = 10;
    $luaspersegi = $sisi1 * $sisi2;
    echo "Luas persegi: " . $luaspersegi;
    echo "<br>";
    $alas = 20;
    $tinggi = 10;
    $luassegitiga = 1 / 2 * $alas * $tinggi;
    echo "Luas segitiga: " . $luassegitiga;
    echo "<br>";
    $a = 14;
    $b = 26;
    $t = 8;
    $luastrapesium = 1 / 2 * ($a + $b) * $t;
    echo "Luas trapesium: " . $luastrapesium;
    echo "<br>";
    define("PHI", 22 / 7);
    $r = 7;
    $t2 = 18;
    $luasptabung = 2 * PHI * $r * ($r + $t2);
    echo "Luas permukaan tabung: " . $luasptabung;
    echo "<br>";
    define("KONST", 4);
    $r2 = 20;
    $luasplingkaran = KONST * PHI * 20 ** 2;
    echo "Luas permukaan lingkaran: " . $luasplingkaran;
?>