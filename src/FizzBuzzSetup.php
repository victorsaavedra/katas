<?php namespace Katas;

use Katas\Rules\BuzzRule;
use Katas\Rules\FizzBuzzRule;
use Katas\Rules\FizzRule;

class FizzBuzzSetup
{
    public static function create(): FizzBuzz
    {
        return new FizzBuzz([
            new FizzBuzzRule(),
            new FizzRule(),
            new BuzzRule()
        ]);
    }
}