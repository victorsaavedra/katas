<?php namespace Katas\Rules;

use Katas\Rule;

class FizzRule extends Rule
{
    public function __construct()
    {
        parent::createRule('Fizz', 3);
    }
}