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
    $stringtunggal = "syahru,ilham,farhan,alam";
    $explode = explode(",",$stringtunggal);
    print_r ($explode); //menjadi bentuk array dari string tunggal 

    echo"\n";
    //no 2
    $stringtunggal = "html,css,php,javascript";
    $explode = explode('-',$stringtunggal);
    print_r ($explode); //menjadi bentuk array dari string tunggal 

    ?>

 </body>
</html> 