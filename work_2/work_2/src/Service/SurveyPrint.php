<?php
header('Content-Type: text/plain');

class printSurvey
{
    public function printFile(Survey $fileName)
    {
        $fileEmail = $fileName->getEmail();
        if (file_exists($fileName = "./data/$fileEmail.txt")) readfile($fileName = "./data/$fileEmail.txt");
        return;
    }
}