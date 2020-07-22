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

}