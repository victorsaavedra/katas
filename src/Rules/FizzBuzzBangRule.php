<?php namespace Katas\Rules;

use Katas\Rule;

class FizzBuzzBangRule extends Rule
{
    public function __construct()
    {
        parent::createRule('FizzBuzzBang', 3*5*7);
    }
}