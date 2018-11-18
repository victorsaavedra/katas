<?php namespace Katas;

interface FizzBuzzRule
{
    public function isMultiple(int $integer): bool;

    public function canSay(): string;
}