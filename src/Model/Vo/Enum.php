<?php

namespace Model\Vo;

class Enum extends VoAbstract
{
    private $values;

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function translate($value)
    {
        if (in_array($value, $this->values)) {
            return $value;
        }
    }
}