<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equity="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <title>Bootcamp_Penus</title>
<head>
<body>
<?php
$hari = "senin";
if($hari == "senin"){
    //hasil jika benar
    echo "I Love Monday";
}else{
    //hasil jika salah
    echo "Ini Bukan Hari Senin";
}

echo "<br>";
echo "<br>";

//latihan soal 1
$nilai = 95;
if($nilai < 60){
    //hasil jika benar
    echo "Siswa Tidak Lulus";
}else{
    //hasil jika salah
    echo "Siswa Lulus";
}

echo "<br>";
echo "<br>";

/*
//lathan soal 2
$nilai1 = 90;
$ket1 = "siswa tidak lulus";
$ket2 = "siswa lulus";
if($nilai < 60 ? echo $ket1 : echo 
*/


//latihan soal 3
$nilaiku = 90;

if($nilaiku <= 85){
    echo "Nilai Anda B";
}else if($nilaiku <= 60){
    echo "Nilai Anda C";
}else{
    echo "Nilai Anda A";
}

echo "<br>";
echo "<br>";


//Deklarasi Function
    function hello(){
        echo "Hello World";
    }
//Pemanggilan function
hello();    

echo "<br>";
echo "<br>";


//Function dengan parameter
function nama($nama, $alamat){
    echo "Hello nama saya adalah $nama, alamat saya di $alamat";
}

nama("Mieke","Cibinong");

echo "<br>";
echo "<br>";

//Function dengan Return
function tambah ($nilai1, $nilai2){
    return $nilai1 + $nilai2;
}
echo tambah(5,4);
?>
</body>
</html>