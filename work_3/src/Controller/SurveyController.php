<?php

namespace App\Controller;

use App\Form\SurveyForm;
use App\Service\SurveyPrint;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Service\RequestSurvey;
use App\Service\SurveyFileStorage;

class SurveyController extends AbstractController
{
    public function SurveySaver(Request $request): Response
    {
        $survey = new RequestSurvey($request);
        $storageData = $survey->parameter();
        $fileStorage = new SurveyFileStorage();
        return $this->render('surveyFile.html.twig', [
            'hasData' => $fileStorage->fileStore($storageData),
        ]);
    }
    public function Survey(Request $request): Response
    {
        $survey = new RequestSurvey($request);
        $storageData = $survey->parameter();
        $print = new SurveyPrint();
        $hasData = $print->printFile($storageData);
        $form = $this->createForm(SurveyForm::class);
        return $this->render('survey.html.twig', [
            'data' => $hasData,
            'form' => $form->createView(),
        ]);
    }
}