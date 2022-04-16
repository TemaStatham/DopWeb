<?php
header('Content-Type: text/plain');

class SurveyFileStorage
{
    public function fileStore(Survey $fileData)
    {
        $fileEmail = $fileData->getEmail();
        $fileFirstName = $fileData->getFirstName();
        $fileLastName = $fileData->getLastName();
        $fileAge = $fileData->getAge();
        $fileName = "./data/$fileEmail.txt";
        if (($fileEmail != null) or ($fileEmail != '')) {
            if (file_exists($fileName)) {
                $file = fopen($fileName, 'w+');
                fwrite($file, "First Name : $fileFirstName \n");
                fwrite($file, "Last Name :  $fileLastName \n");
                fwrite($file, "Email :  $fileEmail \n");
                fwrite($file, "Age :  $fileAge \n");
            } else {
                $file = fopen($fileName, 'r');
                $fp = file($fileName);
                if ($fileFirstName !== null) $fp[0] = "First Name :  $fileFirstName  \n";
                if ($fileLastName !== null) $fp[1] = "Last Name :  $fileLastName \n";
                if ($fileAge !== null) $fp[3] = "Age : $fileAge \n";
                fclose($file);
                $file = fopen($fileName, 'w+');
                fwrite($file, join($fp));
            }
            fclose($file);
        } else
            echo 'Нет  параметра email';
    }
}