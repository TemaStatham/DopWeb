<?php
header('Content-Type: text/plain');

class RequestSurvey
{
    public function getParameter(string $paramName): ?string
    {
        return $_GET[$paramName] ?? null;
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