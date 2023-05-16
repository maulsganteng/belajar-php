<?php
class Notification{
    const webDev = "belajar web development php.";
}
interface Study{
    public function personalStudy();
}
class School implements study {
    public function personalStudy()
    {
        echo Notification::webDev;
    }
}
$school = new school();
$school->personalStudy();
?>