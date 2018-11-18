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
        /** @var Rule|array $rule */
        foreach($this->rules as $rule) {
            if (is_array($rule)) {
                $result = true;
                $say = '';
                /** @var Rule $mulRule */
                foreach($rule as $mulRule) {
                    $result = $result && $mulRule->isMultiple($integer);
                    $say .= $mulRule->say();
                }
                if ($result) {
                    return $say;
                }
            } else {
                if ($rule->isMultiple($integer)) {
                    return $rule->say();
                }
            }
        }

        return strval($integer);
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