<?php namespace Katas;

use Katas\Rules\BangRule;
use Katas\Rules\BuzzRule;
use Katas\Rules\FizzRule;

class FizzBuzzSetup
{
    public static function create(): FizzBuzz
    {
        return new FizzBuzz([
            [new FizzRule(), new BuzzRule(), new BangRule()],
            [new BuzzRule(), new BangRule()],
            [new FizzRule(), new BangRule()],
            [new FizzRule(), new BuzzRule()],
            new BangRule(),
            new FizzRule(),
            new BuzzRule()
        ]);
    }
}