<?php namespace Katas;

use Katas\Rules\BangRule;
use Katas\Rules\BuzzBangRule;
use Katas\Rules\BuzzRule;
use Katas\Rules\FizzBangRule;
use Katas\Rules\FizzBuzzBangRule;
use Katas\Rules\FizzBuzzRule;
use Katas\Rules\FizzRule;

class FizzBuzzSetup
{
    public static function create(): FizzBuzz
    {
        return new FizzBuzz([
            new FizzBuzzBangRule(),
            new BuzzBangRule(),
            new FizzBangRule(),
            new FizzBuzzRule(),
            new BangRule(),
            new FizzRule(),
            new BuzzRule()
        ]);
    }
}