<?php namespace Katas\Rules;

use Katas\Rule;

class BuzzRule extends Rule
{
    public function __construct()
    {
        parent::createRule('Buzz', 5);
    }
}