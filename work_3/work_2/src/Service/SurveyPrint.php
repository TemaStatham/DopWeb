<?php

namespace App\Service;


class SurveyPrint
{
    public static function printFile(Survey $fileName): array
    {
        $fileEmail = $fileName->getEmail();
        $fileData = [];
        if (file_exists("data1/$fileEmail.txt"))
        {
            $fileData = file("data1/$fileEmail.txt");
        }
        return $fileData;
    }
}