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
$passwordasli = "12345";
$passwordinput = "12345";
$cocok = strcmp($passwordasli, $passwordinput);
if ($cocok != 0)
  {
    echo "Password anda salah!";
  }
else
  {
    echo "Password anda benar!";
}

?>
</body>
</html>