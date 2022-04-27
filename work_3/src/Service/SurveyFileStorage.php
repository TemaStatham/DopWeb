<?php

namespace App\Service;


class SurveyFileStorage
{
    public function fileStore(Survey $fileData): bool
    {
        if ($fileEmail = $fileData->getEmail()) {
            $fileName = "data1/$fileEmail.txt";
            $data = $fileData->getData();
            $file = fopen($fileName, 'w+');
            fwrite($file, implode("\n", $data));
            fclose($file);
            return true;
        } else {
            echo 'Нет  параметра email';
            return false;
        }
    }
}