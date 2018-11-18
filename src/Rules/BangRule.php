<?php namespace Katas\Rules;

use Katas\Rule;

class BangRule extends Rule
{
    public function __construct()
    {
        parent::createRule('Bang', 7);
    }
}