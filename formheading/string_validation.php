<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FROM VALIDATION</title>
</head>
<body>
    <?PHP
    //
    // $namakelas = "";
    // $kelas = "";

    //measagge error required
    $namalengkapError = '';
    $kelaserrror = '';

    if($_server["REQUEST_METHOD"] === "POST") {
        // $namalengkap = dataType($_POST['namalengkap']);
        // $kelas = dataType($_POST['kelas']);
        if(empty($_POST['namalengkap'])){
            $namalengkapError = "nama lengkap tidak boleh kosong, harus disiikan.";
        }else {
            $namalengkap = dataType($_POST['namalengkap']);
        }
        if(empty($_POST['kelas'])){
            $namalengkapError = "nama lengkap tidak boleh kosong, harus disiikan.";
        }else {
            $namalengkap = dataType($_POST['kelas']);
        }
    }
    function dataType($datakelas)
    {
        $inputData = trim($datakelas);
        $inputData = stripslashes($datakelas);
        $inputData = htmlspecialchars($datakelas);
        return $inputData ;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_server['php_self']);?>"method="POST">
        <div style="margin-bottom: 3px;">
        <label for="username">username</label>
        <input type="text" id="username" name="namalengkap"placeholder="masukan nama anda"/>
        <span style="color:red; font-size:10px"><?php echo $namalengkapError;?></span>
        </div>
        <input type="submit" vlaue="simpen nama">
        <div style="margin-bottom: 3px;">
        <label for="kelas">kelas</label>
        <input type="number" id="kelas" name="kelas"placeholder="masukan kelas anda"/>
        </div>
        <input type="submit" vlaue="simpan kelas">
    </form>

    <?php 
    echo"<br>";
    echo "nama lengkap saya " . $namalengkap;
    echo "<br>";
    echo "kelas saya " . $kelas;
    ?>
 </body>
</html>