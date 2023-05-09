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
   // $fungsi ="ini adalah cetakan hasil fungsi const dari fungsi";
    define("fungsi","ini adalah cetakan hasil fungsi const dari fungsi");
    echo fungsi;

    //define constants array 
    define("arraykelas", ["kelas x","klas xi","kelas xii"]);
    echo arraykelas;
    
    //define const funtion global 
    define("global","berisikan tenatng value global function");
    function globalFunction(){
        echo global;
    }
    
    ?>

 </body>
</html>