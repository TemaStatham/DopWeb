<?php

namespace App\Service;

use App\Service\Survey;

class SurveyFileStorage
{
    public function fileStore(Survey $fileData)
    {
        $fileEmail = $fileData->getEmail();
        $fileFirstName = $fileData->getFirstName();
        $fileLastName = $fileData->getLastName();
        $fileAge = $fileData->getAge();
        if ($fileEmail) {
            $fileName = "data1/$fileEmail.txt";
            if (file_exists($fileName)) {
                $file = fopen($fileName, 'w+');
                fwrite($file, "First Name : $fileFirstName \n");
                fwrite($file, "Last Name :  $fileLastName \n");
                fwrite($file, "Email :  $fileEmail \n");
                fwrite($file, "Age :  $fileAge \n");
                fclose($file);
            } else {
                $file = fopen($fileName, 'w');
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