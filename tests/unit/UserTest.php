<?php

use PHPUnit\Framework\TestCase; 

class UserTest extends TestCase
{

    protected $user;

    public function setUp():void
    {
        $this->user = new \App\Models\User;
        
    }

    public function testGetTheFirstName() 
    {

        $this->user->setFirstName('khalid');

        $this->assertEquals($this->user->getFirstName(), 'khalid');

    }

    public function testGetThelastName() 
    {

        $this->user->setlastName('didi');

        $this->assertEquals($this->user->getlastName(), 'didi');

    }

    public function testFullNameIsReturned() 
    {

        $this->user->setFirstName('khalid');
        $this->user->setlastName('didi');

        $this->assertEquals($this->user->getFullName(), 'khalid didi');

    }

    public function testFirstAndLastNameAreTrimed()
    {
        $this->user->setFirstName('khalid     ');
        $this->user->setlastName('     didi ');

        $this->assertEquals($this->user->getFirstName(), 'khalid');
        $this->assertEquals($this->user->getlastName(), 'didi');

    }

    public function testEmailAdressCanBeSet()
    {
        $this->user->setEmail('test@gmail.com');

        $this->assertEquals($this->user->getEmail(), 'test@gmail.com');

    }

    public function testEmailVariableContainCorrectValues()
    {
        $this->user->setFirstName('khalid     ');
        $this->user->setEmail('test@gmail.com');

        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('email', $emailVariables);
        $this->assertArrayHasKey('firstName', $emailVariables);

        $this->assertEquals($emailVariables['firstName'], $this->user->getFirstName());
        $this->assertEquals($emailVariables['email'], $this->user->getEmail());

    }

}