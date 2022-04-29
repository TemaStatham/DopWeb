<?php

namespace App\Service;


class SurveyPrint
{
    public static function printFile(Survey $dataEmail): ?array
    {
        if (file_exists("./data1/".$dataEmail->getEmail().".txt"))  {
            return  file("./data1/".$dataEmail->getEmail().".txt");
        } else {
            echo 'такого файла не существует';
            return null;
        }
    }
}