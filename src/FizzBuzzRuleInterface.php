<?php namespace Katas;

interface FizzBuzzRuleInterface
{
    public function isMultiple(int $integer): bool;

    public function say(): string;
}