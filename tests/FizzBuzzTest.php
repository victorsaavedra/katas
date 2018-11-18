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
        $this->assertEquals('7', $fizzBuzz->say(7));
        $this->assertEquals('8', $fizzBuzz->say(8));

        $this->assertNotEquals('3', $fizzBuzz->say(3));
        $this->assertNotEquals('5', $fizzBuzz->say(5));
        $this->assertNotEquals('9', $fizzBuzz->say(9));
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

    public function testMultipleOf15(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();

        $this->assertEquals('FizzBuzz', $fizzBuzz->say(15));
        $this->assertEquals('FizzBuzz', $fizzBuzz->say(30));
        $this->assertEquals('FizzBuzz', $fizzBuzz->say(45));
    }

    public function testRangeOf20(): void
    {
        $fizzBuzz = FizzBuzzSetup::create();
        $expectedResult = '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz';
        $result = [];

        foreach(range(1,20) as $integer) {
            $result[] = $fizzBuzz->say($integer);
        }

        $this->assertEquals($expectedResult, implode(' ', $result));
    }
}