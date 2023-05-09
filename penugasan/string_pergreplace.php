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
    $karakter ="Aku sedang berada pada materi string preg_match().";
   $pola = "/preg_match/";
   $mengganti ="preg_replace";
   echo preg_replace($pola,$mengganti,$karakter);

   echo"\n";
    //no 2
   $karakter ="Aku telah melalui pembelajaran javascript. ";
   $pola = "/javascript/";
   $mengganti ="php";
   echo preg_replace($pola,$mengganti,$karakter)
    ?>

 </body>
</html>