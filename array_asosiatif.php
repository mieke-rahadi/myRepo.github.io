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

$siswa1 = [ "nama" => 'abduh'
            "kelas" => 'laravel'
            "nilai" => 70
          ];
print_r($siswa1);

// menambahkan key value baru ke array $siswa1
$siswa1["email"] = "abduh@mail.com";

print_r($siswa1);
?>
</body>
</html>