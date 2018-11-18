<?php namespace Katas;

abstract class Rule
{
    /** @var string */
    private $message;

    /** @var int */
    private $isMultipleOf;

    public function createRule(string $message, int $isMultipleOf)
    {
        $this->message = $message;
        $this->isMultipleOf = $isMultipleOf;
    }

    /**
     * @param int $integer
     * @return bool
     */
    public function isMultiple(int $integer): bool
    {
        return ($integer % $this->isMultipleOf) === 0;
    }

    public function say(): string
    {
        return $this->message;
    }
}