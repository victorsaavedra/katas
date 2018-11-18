<?php namespace Katas\tests;

use Katas\FizzBuzzSetup;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public function testNotMultipleNumbers(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();

        $this->assertEquals('1', $fizzBuzz->say(1));
        $this->assertEquals('2', $fizzBuzz->say(2));
        $this->assertEquals('4', $fizzBuzz->say(4));
        $this->assertEquals('8', $fizzBuzz->say(8));

        $this->assertNotEquals('3', $fizzBuzz->say(3));
        $this->assertNotEquals('5', $fizzBuzz->say(5));
        $this->assertNotEquals('7', $fizzBuzz->say(7));
        $this->assertNotEquals('9', $fizzBuzz->say(9));
        $this->assertNotEquals('21', $fizzBuzz->say(21));
        $this->assertNotEquals('35', $fizzBuzz->say(35));
        $this->assertNotEquals('105', $fizzBuzz->say(105));
    }

    public function testMultiplesOf3(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();

        $this->assertEquals('Fizz', $fizzBuzz->say(3));
        $this->assertEquals('Fizz', $fizzBuzz->say(6));
        $this->assertEquals('Fizz', $fizzBuzz->say(9));

        $this->assertNotEquals('Fizz', $fizzBuzz->say(15));
    }

    public function testMultiplesOf5(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();

        $this->assertEquals('Buzz', $fizzBuzz->say(5));
        $this->assertEquals('Buzz', $fizzBuzz->say(10));
        $this->assertEquals('Buzz', $fizzBuzz->say(20));

        $this->assertNotEquals('Buzz', $fizzBuzz->say(15));
    }

    public function testMultiplesOf7(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();

        $this->assertEquals('Bang', $fizzBuzz->say(7));
        $this->assertEquals('Bang', $fizzBuzz->say(14));

        $this->assertNotEquals('Bang', $fizzBuzz->say(21));
        $this->assertNotEquals('Bang', $fizzBuzz->say(35));
        $this->assertNotEquals('Bang', $fizzBuzz->say(105));
    }

    public function testMultipleOf3And5(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();

        $this->assertEquals('FizzBuzz', $fizzBuzz->say(15));
        $this->assertEquals('FizzBuzz', $fizzBuzz->say(30));
        $this->assertEquals('FizzBuzz', $fizzBuzz->say(45));
    }

    public function testMultiplesOf3And7(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();

        $this->assertEquals('FizzBang', $fizzBuzz->say(21));
        $this->assertEquals('FizzBang', $fizzBuzz->say(42));
    }

    public function testMultiplesOf5And7(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();

        $this->assertEquals('BuzzBang', $fizzBuzz->say(35));
        $this->assertEquals('BuzzBang', $fizzBuzz->say(70));
    }

    public function testMultiplesOf3And5And7(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();

        $this->assertEquals('FizzBuzzBang', $fizzBuzz->say(105));
        $this->assertEquals('FizzBuzzBang', $fizzBuzz->say(210));
    }

    public function testRangeOf20(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();
        $expectedResult = '1 2 Fizz 4 Buzz Fizz Bang 8 Fizz Buzz 11 Fizz 13 Bang FizzBuzz 16 17 Fizz 19 Buzz FizzBang 22 23 Fizz Buzz 26 Fizz Bang 29 FizzBuzz 31 32 Fizz 34 BuzzBang Fizz 37 38 Fizz Buzz 41 FizzBang 43 44 FizzBuzz 46 47 Fizz Bang Buzz Fizz 52 53 Fizz Buzz Bang Fizz 58 59 FizzBuzz 61 62 FizzBang 64 Buzz Fizz 67 68 Fizz BuzzBang 71 Fizz 73 74 FizzBuzz 76 Bang Fizz 79 Buzz Fizz 82 83 FizzBang Buzz 86 Fizz 88 89 FizzBuzz Bang 92 Fizz 94 Buzz Fizz 97 Bang Fizz Buzz 101 Fizz 103 104 FizzBuzzBang 106 107 Fizz 109 Buzz Fizz Bang 113 Fizz Buzz 116 Fizz 118 Bang FizzBuzz 121 122 Fizz 124 Buzz FizzBang 127 128 Fizz Buzz 131 Fizz Bang 134 FizzBuzz 136 137 Fizz 139 BuzzBang Fizz 142 143 Fizz Buzz 146 FizzBang 148 149 FizzBuzz';
        $result = $fizzBuzz->sayRange(range(1, 150));

        $this->assertEquals($expectedResult, $result);
    }
}