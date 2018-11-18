<?php namespace Katas;

use Katas\Rules\BuzzRule;
use Katas\Rules\FizzRule;

class FizzBuzzSetup
{
    public static function create(): FizzBuzz
    {
        return new FizzBuzz([
            new FizzRule(),
            new BuzzRule()
        ]);
    }
}