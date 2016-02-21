<?php

/**
 * Class PokemonCharger
 *
 * Delegated the responsibility of creating and infusion of crystals.
 */

abstract class PokemonCharger
{
    protected $crystal;

    protected function chargeCrystal()
    {
        $this->crystal->powerGauge = 100;
    }

    abstract public function crystalCreateAndInfuse();
}

class PikaChuCharger extends PokemonCharger
{
    public function crystalCreateAndInfuse(){
        //...does other complex tasks specific only to a lightningCrystal
        // to generate the actual lightning crystal...
        $this->crystal = new lightningCrystal();
        $this->chargeCrystal();
        return $this->crystal;
    }
}

class CharmanderCharger extends PokemonCharger
{
    public function crystalCreateAndInfuse(){
        // ... does other complex tasks specific only to a fireCrystal
        // to generate the actual fire crystal element...
        $this->crystal->fireCrystal = new fireCrystal();
        $this->chargeCrystal();
        return $this->crystal;
    }
}

