<?php

namespace App\Service;

use App\Service\RequestSurvey;

class Survey
{
    private $email;
    private $firstName;
    private $lastName;
    private $age;
    public function __construct(RequestSurvey $email, $firstName, $lastName, $age)
    {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getAge()
    {
        return $this->age;
    }
}