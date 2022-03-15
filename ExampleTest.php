<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
	public function test_sum_success(){
        require 'functions.php';
        $this->assertEquals(4, sum(2, 2));
    }

    public function test_sum_failure(){
        require 'functions.php';
        $this->assertEquals(4, sum(2, 2));
    }
    
}

?>