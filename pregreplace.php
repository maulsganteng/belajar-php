<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php project</title>
</head>
<body>

    <?php
    $kalimatstring = "saat ini sudah belajar laravel";
    $cari = "/sudah/";
    $gantikan = "belum";

    echo preg_replace($cari,$gantikan,$kalimatstring);
    Echo preg_replace("/sudah/","belum"," karakter patrik sudah selesai ");
    ?>

 </body>
</html>
