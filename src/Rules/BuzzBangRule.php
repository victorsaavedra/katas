<?php namespace Katas\Rules;

use Katas\Rule;

class BuzzBangRule extends Rule
{
    public function __construct()
    {
        parent::createRule('BuzzBang', 5*7);
    }
}