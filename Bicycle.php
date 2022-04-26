<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    public function switchOn(): bool
    {
        if($this->getCurrentSpeed >10)
        {        
            return  $this->switchOn(true);
        }else{
            return false;
        }
    }
    public function switchOff(): bool
    {
        return  $this->switchOn(false);
    }
}