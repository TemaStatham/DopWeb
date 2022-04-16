<?php

namespace App\Service;

use App\Service\RequestSurvey;
use App\Service\Survey;
use App\Service\SurveyFileStorage;
use App\Service\SurveyPrint;


class SurveyService
{
    public function  SurveySaver():
    {
        $survey = new RequestSurvey;
        $storageData = $survey->parameter();
        $fileStorage = new SurveyFileStorage;
        $file = $fileStorage->fileStore($storageData);
        $printStorage = new SurveyPrint;
        $printStorage->printFile($storageData);
    }
}
