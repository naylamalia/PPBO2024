<?php
function luasLingkaran($jari) : float {
    $luas=3.14*$jari*$jari;
    return $luas;
}
function kelilingLingkaran($jari) : float {
    return 2 * 3.14 * $jari;
}

function volumeBola($jari) : float {
    return (4/3) * 3.14 * $jari * $jari * $jari;
}

function volumeTabung($jari, $tinggi) : float {
    return 3.14 * $jari * $jari * $tinggi;
}

function volumeKerucut($jari, $tinggi) : float {
    return (1/3) * 3.14 * $jari * $jari * $tinggi;
}

$jari = 10;
$tinggi = 20;

$luas_lingkaran = luasLingkaran($jari);
$keliling = kelilingLingkaran($jari);
$volume_bola = volumeBola($jari);
$volume_tabung = volumeTabung($jari, $tinggi);
$volume_kerucut = volumeKerucut($jari, $tinggi);

echo "Luas Lingkaran dengan jari-jari {$jari} adalah {$luas_lingkaran}";
echo "Keliling lingkaran dengan jari-jari {$jari} adalah {$keliling}\n";
echo "Volume bola dengan jari-jari {$jari} adalah {$volume_bola}\n";
echo "Volume tabung dengan jari-jari {$jari} dan tinggi {$tinggi} adalah {$volume_tabung}\n";
echo "Volume kerucut dengan jari-jari {$jari} dan tinggi {$tinggi} adalah {$volume_kerucut}\n";
