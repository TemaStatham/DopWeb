<?php

namespace App\Service;

class RequestSurvey
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getParameter(string $paramName)
    {
        return $this->request->query->get($paramName);
    }

    public function parameter(): Survey
    {
        $firstName = $this->getParameter('first_name');
        $lastName = $this->getParameter('last_name');
        $email = $this->getParameter('email');
        $age = $this->getParameter('age');
        return new Survey($email, $firstName, $lastName, $age);
    }
}