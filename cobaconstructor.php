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
    private $ban, $merk, $warna, $jenis;

    public function __construct($merk, $ban, $warna, $jenis)
    {
        echo "mobil ini bermerk : ".$this->merk = $merk."<br>";
        echo "beroda : ".$this->ban = $ban."<br>";
        echo "berwarna : ".$this->warna = $warna."<br>";
        echo "berjenis : ".$this->jenis = $jenis."<br>";
    }        
}

//inisialisasi objek
$toyota = new Mobil("avanza", 4, "hitam", "MPV");
$honda = new Mobil("brio", 4, "merah", "LCGC")





?>
</body>
</html>