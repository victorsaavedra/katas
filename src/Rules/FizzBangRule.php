<?php namespace Katas\Rules;

use Katas\Rule;

class FizzBangRule extends Rule
{
    public function __construct()
    {
        parent::createRule('FizzBang', 3*7);
    }
}