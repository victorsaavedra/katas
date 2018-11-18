<?php namespace Katas\Rules;

use Katas\Rule;

class FizzBuzzRule extends Rule
{
    public function __construct()
    {
        parent::createRule('FizzBuzz', 3*5);
    }
}