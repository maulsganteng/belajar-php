<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php comments</title>
</head>
<body>
   <?PHP 
   //definisi name fungsi inputan 
   $namaLengkap = '';
   $kelas ='';

   //definisi notifikasi error jika kosong
    $namaLengkapError = '';
    $kelasError = '' ;

    function dataType($datakelas)
    {
        $inputData = trim($datakelas);
        $inputData = stripslashes($datakelas);
        $inputData = htmlspecialchars($datakelas);
        return $inputData ;
    }

    if($_SERVER['REQUEST_MENTHOD'])
   ?>

 </body>
</html>