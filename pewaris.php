<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equity="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <title>Parent-Child</title>
<head>
<body>
<?php

class Mobil{
    //properti
    private $merk, $ban, $warna;
    //method
    public function __construct ($merk, $ban, $warna){
        $this->merk = $merk;
        $this->ban = $ban;
        $this->warna = $warna;
    }


    public function intro(){
        echo "Mobil ini bermerk {$this->merk} dan
        berwana {$this->warna} serta beroda {$this->ban} <br>";
    }
}

class Avanza extends Mobil{
    public function hello(){
        echo "helo mobil saya adalah avanza";
    }
}

//inisialisasi
$avanza = new Avanza("avanza", 4, "merah");
$avanza->intro();
$avanza->hello();







?>
</body>
</html>