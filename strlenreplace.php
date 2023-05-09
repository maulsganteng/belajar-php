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
    $karakter ="Belajar php mernggunakan string preg_replace()";
   $pola = "/php/";
   $mengganti ="css";
   echo preg_replace($pola,$mengganti,$karakter);
    ?>

 </body>
</html>