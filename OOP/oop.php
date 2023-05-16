<?php
class oop
{
    public function publicMenthod(){
        echo "ini adalah OOP Metode publik";
    }

    protected function protectedMenthod(){
        echo "ini adalah OOP Metode protected";
    }
    private function privateMenthod()
    {
        echo "ini adalah OOP Metode private";
    }
    public function AccessMenthodOOP()//abang
    {
        $this->publicMenthod();//adek 1
        echo "<br>";
        $this->publicMenthod();// adek 2
        echo "<br>";
        $this->publicMenthod();// adek 3
    }
}
$oop = new OOP();
$oop->publicMenthod();
echo "<br>";
$oop->AccessMenthodOOP()
?>