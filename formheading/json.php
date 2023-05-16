
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //json encode
    $kelas = array(
        //'key' => 'value'
        'x' => 'kelas x',
        'xi' => 'kelas xi',
        'xii' => 'kelas xii',
    );
        echo json_encode($kelas);
    ?>
</body>
</html>