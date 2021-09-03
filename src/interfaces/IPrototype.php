<?php

namespace Src\interfaces;

abstract class IPrototype
{
    public $eyeColor;
    public $wingBeat;
    public $unitEyes;

    abstract function __clone();
}