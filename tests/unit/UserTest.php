<?php

use PHPUnit\Framework\TestCase; 

class UserTest extends TestCase{

    public function testGetTheFirstName() {

        $user = new \App\Models\User;

        $user->setFirstName('khalid');

        $this->assertEquals($user->getFirstName(), 'khalid');

    }

    public function testGetThelastName() {

        $user = new \App\Models\User;

        $user->setlastName('didi');

        $this->assertEquals($user->getlastName(), 'didi');

    }

    public function testFullNameIsReturned() {

        $user = new \App\Models\User;
        $user->setFirstName('khalid');
        $user->setlastName('didi');

        $this->assertEquals($user->getFullName(), 'khalid didi');

    }

    public function testFirstAndLastNameAreTrimed()
    {
        $user = new \App\Models\User;
        $user->setFirstName('khalid     ');
        $user->setlastName('     didi ');

        $this->assertEquals($user->getFirstName(), 'khalid');
        $this->assertEquals($user->getlastName(), 'didi');

    }

    public function testEmailAdressCanBeSet()
    {
        
        $user = new \App\Models\User;
        $user->setEmail('test@gmail.com');

        $this->assertEquals($user->getEmail(), 'test@gmail.com');

    }

    public function testEmailVariableContainCorrectValues()
    {
        $user = new \App\Models\User;
        $user->setFirstName('khalid     ');
        $user->setEmail('test@gmail.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('email', $emailVariables);
        $this->assertArrayHasKey('firstName', $emailVariables);

        $this->assertEquals($emailVariables['firstName'], $user->getFirstName());
        $this->assertEquals($emailVariables['email'], $user->getEmail());

    }

}