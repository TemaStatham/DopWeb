<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class Survey
{
    private $email;
    private $firstName;
    private $lastName;
    private $age;
    public function __construct(LoggerInterface $email, $firstName, $lastName, $age)
    {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function getAge(): string
    {
        return $this->age;
    }
}