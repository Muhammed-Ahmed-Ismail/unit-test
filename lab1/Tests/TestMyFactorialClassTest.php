<?php


use PHPUnit\Framework\TestCase;
use Src\MyFactorial;

class TestMyFactorialClassTest extends TestCase
{
    private static MyFactorial $myFactorialObject ;
    public static function setUpBeforeClass(): void
    {
        self::$myFactorialObject=new MyFactorial();
    }

    public function test_factorial_return_zero_when_n_equal_zero()
    {
        $this->assertTrue(self::$myFactorialObject->myfactorial(0)==1);
    }
    public function test_factorial_return_null_when_n_equal_not_a_number()
    {
        $this->assertTrue(self::$myFactorialObject->myfactorial("st")===null);
    }
    public function test_factorial_for_a_random_number()
    {
        $n=rand(3,60);
        $this->assertTrue(self::$myFactorialObject->myfactorial($n)==$n*myFactorial($n-1));
    }
    public function test_factorial_for_boolean_value()
    {

        $this->assertTrue(self::$myFactorialObject->myfactorial(false)===null);
    }
}
