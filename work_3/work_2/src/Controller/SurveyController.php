<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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
        $fileStorage = new SurveyFileStorage();
        $hasData = $fileStorage->fileStore($storageData);
        $data = $hasData ? $storageData->getData() : [];
        return $this->render('survey.html.twig', [
            'data' => $data,
        ]);
    }
}