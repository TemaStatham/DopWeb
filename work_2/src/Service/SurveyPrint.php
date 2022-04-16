<?php

namespace App\Service;

use App\Service\Survey;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SurveyPrint extends AbstractController
{
    public function printFile(Survey $fileName)
    {
        $fileEmail = $fileName->getEmail();
        if (file_exists($fileName = "./data/$fileEmail.txt")) readfile($fileName = "./data/$fileEmail.txt");
        return;
    }
}