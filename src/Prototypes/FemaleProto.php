<?php

namespace Src\Prototypes;
use Src\interfaces\IPrototype;

class FemaleProto extends IPrototype
{
    const gender = "FEMALE";
    public $fecundity;

    public function __construct()
    {
        $this->eyeColor = "red";
        $this->wingBeat = "220";
        $this->unitEyes = "760";
    }
    function __clone(){}
}