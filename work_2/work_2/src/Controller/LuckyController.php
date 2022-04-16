<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\RequestSurvey;

class LuckyController extends AbstractController
{
    /**
     * @Route("/url", name="url_parser")
     */
    public function number(Request $request): Response
    {
        $survey = new RequestSurvey;
    }
}

