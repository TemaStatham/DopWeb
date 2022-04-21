<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\RequestSurvey;
use App\Service\Survey;
use App\Service\SurveyFileStorage;
use App\Service\SurveyPrint;

class SurveyController extends AbstractController
{
    public function SurveySaver(Request $request): Response
    {
        $survey = new RequestSurvey($request);
        $storageData = $survey->parameter();
        $fileStorage = new SurveyFileStorage;
        $fileStorage->fileStore($storageData);
        $printStorage = new SurveyPrint;
        $printStorage->printFile($storageData);
        $fileData = SurveyPrint::printFile($storageData);
        return $this->render('survey.html.twig', [
            'first_name' => $fileData[0],
            'last_name' => $fileData[1],
            'age' => $fileData[2],
            'email' => $fileData[3],
        ]);
    }
}