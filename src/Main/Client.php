<?php

namespace Src\Main;

use Src\Prototypes\MaleProto;
use Src\Prototypes\FemaleProto;
use Src\interfaces\IPrototype;

class Client
{
    private $fly1;
    private $fly2;

    private $c1Fly;
    private $c2Fly;
    private $updatedCloneFly;

    public function __construct()
    {
        //Instantiate
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();

        //Clone
        $this->c1Fly = clone $this->fly1;

        $this->c2Fly = clone $this->fly2;
        $this->updatedCloneFly = clone $this->fly2;

        //update clones
        $this->c1Fly->mated="true";
        $this->c2Fly->fecundity="186";
        $this->updatedCloneFly->eyeColor = "purple";
        $this->updatedCloneFly->wingBeat = "220";
        $this->updatedCloneFly->unitEyes = "750";
        $this->updatedCloneFly->fecundity="92";

        //send through type hinting method
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updatedCloneFly);

    }

    private function showFly(IPrototype $fly)
    {
        echo"Eye color: ".$fly->eyeColor . "<br/>";
        echo "Wing Beats/second: ".$fly->unitEyes . "<br/>";
        $genderNow = $fly::gender;
        echo "Gender: ".$genderNow."<br/>";

        if($genderNow == "FEMALE")
        {
            echo "Number of eggs: ".$fly->fecundity."<p/>";
        }
        else
        {
            echo "Mated: ".$fly->mated . "<p/>";
        }
    }
}