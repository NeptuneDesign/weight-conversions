<?php

namespace NeptuneDesign\WeightConversions;

class Weight
{
    public static function kilograms(float $kilograms): self {
        $myArray = array('1', '2');

        return new static($kilograms);
    }

    public function __construct(protected float $kilograms)
    {
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}
