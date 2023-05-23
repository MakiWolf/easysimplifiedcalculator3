<?php
use PHPUnit\Framework\TestCase;

class calculationtest extends TestCase
{
    
    public function testAdd($number1 = 10, $number2 = 3, $expected = 13) : void
    {   
        $calc = new calculation();
        $result = $calc->add($number1,$number2);
        $this->assertSame($result, $expected);
    }
    public function testsub($number1 = 10, $number2 = 3, $expected = 7) : void
    {    
        $calc = new calculation();
        $result = $calc->sub($number1,$number2);
        $this->assertSame($result, $expected);
    }
    public function testmult($number1 = 10, $number2 = 3, $expected = 30) : void
    {    
        $calc = new calculation();
        $result = $calc->mult($number1,$number2);
        $this->assertSame($result, $expected);
    }
    public function testdiv($number1 = 10, $number2 = 2, $expected = 6) : void
    {    
        $calc = new calculation();
        $result = $calc->div($number1,$number2);
        $this->assertSame($result, $expected);
    }
}
?>