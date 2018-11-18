<?php namespace Katas;

class FizzBuzz
{
    /** @var Rule[]|array */
    private $rules;

    /**
     * @param Rule[]|array $rules
     */
    public function __construct(array $rules)
    {
        $this->rules = $rules;
    }

    /**
     * @param int $integer
     * @return string
     */
    public function say(int $integer): string
    {
        $multiple = false;
        $say = '';
        /** @var Rule|array $rule */
        foreach($this->rules as $rule) {
            if ($rule->isMultiple($integer)) {
                $multiple = true;
                $say.= $rule->say();
            }
        }

        return $multiple ? $say : strval($integer);
    }

    /**
     * @param int[] $integers
     * @return string
     */
    public function sayRange(array $integers): string
    {
        $result = array_map(
            function(int $integer) {
                return $this->say($integer);
            }, $integers
        );

        return implode(' ', $result);
    }
}