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

//penggunaan private
class Mobil{
//properti
private $ban, $merk, $warna, $jenis;

//method
    public function setMerk($merk){
        return $this->merk = $merk;
    }

    public function getMerk(){
        return $this->merk ;
    }

    public function setBan($ban){
        return $this->ban = $ban;
    } 

    public function getBan(){
        return $this->ban ;
    }

    public function setWarna($warna){
        return $this->warna = $warna;
    }

    public function getWarna(){
        return $this->warna ;
    }

    public function setJenis($jenis){
        return $this->jenis = $jenis;
    }

    public function getjenis(){
        return $this->jenis ;
    }

}

//inisialisasi objek
$toyota = new Mobil();
$toyota->setMerk("Avanza");
echo $toyota->getMerk();
echo "<br>";
$toyota->setBan("4");
echo $toyota->getBan();
echo "<br>";

echo "<br>";

$honda = new Mobil();
$honda->setMerk("Brio");
echo $honda->getMerk();
echo "<br>";

$bajaj = new Mobil();
$bajaj->setMerk("Pulsar");
echo $bajaj->getMerk();
echo "<br>";

$truk = new Mobil();
$truk->setMerk("Fuso");
echo $truk->getMerk();
echo "<br>";
    




?>
</body>
</html>