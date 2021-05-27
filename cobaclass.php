<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equity="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <title>documents</title>
<head>
<body>
<?php

class Mobil{
    //properti
    public $ban;
    public $merk;
    public $warna;
    public $jenis;

    //method
    public function berjalan(){
        echo "mobil berjalan";
    }
    public function berbelok(){
        echo $this->merk." berbelok";
    }
}

//inisialisasi objek
$toyota = new Mobil();
$toyota->ban = 4;
$toyota->merk = "avanza";
$toyota->warna = "hitam";

$honda = new Mobil();
$honda->merk = "Brio";
$honda->ban = 4;
$honda->warna = "putih";

$bajaj = new Mobil();
$bajaj->ban = 3;
$bajaj->merk = "pulsar";
$toyota->warna = "orange";

$truk = new Mobil();
$truk->ban = 6;
$truk->merk = "fuso";
$truk->warna = "kuning";


//memanggil nilai
echo $toyota->ban;
echo "<br>";
echo $toyota->merk;
echo "<br>";
echo $toyota->berjalan();
echo "<br>";
echo "<br>";

echo "merk mobil adalah ".$honda->merk;
echo "<br>";
echo "bannya berjumlah ".$honda->ban;
echo "<br>";
echo "berwarna ".$honda->warna;
echo "<br>";
echo $honda->berjalan();
echo "<br>";
echo "<br>";

echo "merk mobil adalah ".$bajaj->merk;
echo "<br>";
echo "bannya berjumlah ".$bajaj->ban;
echo "<br>";
echo "berwarna ".$bajaj->warna;
echo "<br>";
echo $bajaj->berbelok();
echo "<br>";
echo "<br>";

echo "merk mobil adalah ".$truk->merk;
echo "<br>";
echo "bannya berjumlah ".$truk->ban;
echo "<br>";
echo "berwarna ".$truk->warna;
echo "<br>";
echo $truk->berbelok();
echo "<br>";





?>
</body>
</html>
