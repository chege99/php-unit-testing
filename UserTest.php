<?php

use PHPUnit\Framework\TestCase;

//1. Extend TestCase
class UserTest extends TestCase{

    //::Function name Must start with test, alternatively use annotation 
    public function test_user_getName(){
        //2. Include File to be tested
        require 'User.php';
        
        $user = new User();
        $user->fullname = "Joe";
        $user->email = "Hello world";

        $this->assertEquals('Joe', $user->fullname());

    }

    

    //:: Using annotation

    /*
    * @test
    */
    
    public function user_getName(){
        // Test Here
    }

}


?>