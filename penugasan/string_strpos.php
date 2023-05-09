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
   $strpos ="Saat ini saya sudah mencapai materi php";
   $searchstrpos ="php";
   echo strpos($strpos,$searchstrpos); //hasilnya 12 
   
   echo "\n";
   $strpos ="Saat ini saya sudah mencapai materi php";
   $searchstrpos ="javascript";
   echo strpos($strpos,$searchstrpos); //hasilnya 12 
    
    ?>

 </body>
</html>