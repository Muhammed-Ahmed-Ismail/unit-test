<?php


use PHPUnit\Framework\TestCase;
require_once "vendor/autoload.php";

class FactorialTest extends TestCase
{

    public function test_factorial_return_zero_when_n_equal_zero()
    {
        $this->assertTrue(myFactorial(0)==1);
    }
    public function test_factorial_return_null_when_n_equal_not_a_number()
    {
        $this->assertTrue(myFactorial("st")===null);
    }
    public function test_factorial_for_a_random_number()
    {
        $n=rand(3,60);
        $this->assertTrue(myFactorial($n)===$n*myFactorial($n-1));
    }
}
