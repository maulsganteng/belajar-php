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
    $kalimatstring = "kita sedang belajar javascript";
    $cari = "/javascript/";
    $gantikan = "php";

    echo preg_replace($cari,$gantikan,$kalimatstring);

    $kosakata = "kita sedang belajar javascript"
    ?>

 </body>
</html>
