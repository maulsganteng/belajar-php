<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php comments</title>
</head>
<body>

    <?php
        $nilai = 90;

        if($nilai >= 75){
            echo "kamu sudah diatas kkm";
        }else{
            echo "kamu dibawah kkm";
        }
        echo"<hr>";

        $waktu = 10;
        if($waktu <= 10){
            echo "selamat pagi";
        }else {
            echo "selamat siang";
        }
        
        //elseif
        $nilaitugas = 80;
        if($nilaitugas >=90){
            echo "selamat kamu nilainya bagus (A)";
        }elseif ($nilaitugas >=85){
            echo "selamat kamu nilai cukup bagus (-A)";
        }elseif ($nilaitugas >= 80){
            echo "selamat kamu nilai nya bagus (B)";
        }elseif ($nilaitugas >= 75){
         echo "selamat kamu nilainya kurang bagus! (C)";
        }else {
            echo "selamat kamu remedial";
        }
        
        echo"<hr>";

        //swicth
        $hari = "selasa";
        switch($hari){
            case 'senin':
                echo "hari ini adalah senin";
                break;
                case 'selasa':
                    echo "hari ini adalah selasa";
                    break;
                    case 'rabu':
                        echo "hari ini adalah rabu";
                        break;  
                        case 'kamis':
                            echo "hari ini adalah kamis";
                            break;  
                            case 'jumat':
                                echo "hari ini adalah jumat";
                                break;    
                                default:
                                echo "hari weekend libur! jangan ganggu!.";
                                break;
        }
    ?>

 </body>
</html>