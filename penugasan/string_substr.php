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
    $kosakata = "Saat ini saya sudah mencapai materi php. ";
    echo "kosakata yang diambil : " , substr($kosakata, 0 , 10);
    
    echo "\n";

    $kosakata = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan substr. ";
    echo "kosakata yang diambil : " , substr($kosakata, 3 , 20);
    ?>

 </body>
</html>