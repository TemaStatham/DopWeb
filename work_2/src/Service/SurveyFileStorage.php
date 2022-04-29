<?php

namespace App\Service;


class SurveyFileStorage
{
    public function fileStore(Survey $fileData): string
    {
        if ($fileEmail = $fileData->getEmail()) {
            $fileName = "data1/$fileEmail.txt";
            $data = $fileData->getData();
            $file = fopen($fileName, 'w+');
            fwrite($file, implode("\n", $data));
            fclose($file);
            return 'Файл сохранен';
        } else {
            return 'Нет  параметра email, файл не сохранен';
        }
    }
}