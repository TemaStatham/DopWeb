<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SurveyService;

class SurveyController extends AbstractController
{
    /**
     * @Route("/email", name="email")
     */
    public function SurveyControl(): Response
    {
        
    }
}