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
    //no 1
   $strpos ="Saat ini saya sudah mencapai materi php";
   $searchstrpos ="php";
   $tidakberhasil ="javascript";
   echo "1.A.berhasil :" . strpos($strpos,$searchstrpos);
   echo "2.B.tidak berhasil :" . strpos($strpos,$tidakberhasil);
   echo "\n";
   //no 2
   $strpos ="Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strpos. ";
   $searchstrpos ="belajar php string";
   $tidakberhasil ="strlen";
   echo "1.A.berhasil :" . strpos($strpos,$searchstrpos);
   echo "2.B.tidak berhasil :" . strpos($strpos,$tidakberhasil);
    ?>

 </body>
</html>