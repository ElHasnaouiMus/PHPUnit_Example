<?php

namespace App\models;

class User {

    public $firstName;
    public $lastName;
    public $email;
    
    public function getFirstName() 
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = trim($firstName);
    }

    public function getLastName() 
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = trim($lastName);
    }

    public function getFullName() 
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmailVariables()
    {
        return [
            'firstName' => $this->getFirstName(),
            'email' => $this->getEmail(),
        ];
    }

}