<?php

namespace App\models;

class User {

    public $firstName;
    public $lastName;
    
    public function getFirstName() 
    {
        return $this->firstName;
    }

    public function getLastName() 
    {
        return $this->lastName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getFullName() {

        return $this->firstName . ' ' . $this->lastName;
    }
}