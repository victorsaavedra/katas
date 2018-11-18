<?php namespace Katas;

class FizzRule extends Rule
{
    public function fizz()
    {
        parent::createRule('Fizz', 3);
    }
}