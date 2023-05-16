<?php
class staticMethod
{
    public static function staticFunc()
    {
        echo "ini adalah static function method";
    }
}
staticMethod::staticFunc();
echo "<br>";

class staticMenthod2{
    public static $oop = "ini adalah metode statik metode versi 2";
    public static function staticFunc2()
    {
        echo self::$oop;
    }
}
staticMenthod2::staticFunc2();
?>
