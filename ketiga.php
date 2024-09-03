<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

$lingkaran = new Lingkaran(10);
echo "Luas Lingkaran: " . $lingkaran->luas() . " cm²\n";
echo "Keliling Lingkaran: " . $lingkaran->keliling() . " cm\n";

$bola = new Bola(7);
echo "Volume Bola: " . $bola->volume() . " cm³\n";

$tabung = new Tabung(5, 15);
echo "Volume Tabung: " . $tabung->volume() . " cm³\n";

$kerucut = new Kerucut(4, 10);
echo "Volume Kerucut: " . $kerucut->volume() . " cm³\n";
