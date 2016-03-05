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

    abstract public function crystalInfuse();
}

class PikaChuCharger extends PokemonCharger
{
    public function crystalInfuse(){
        $lightningCrystalFactory = new LightningCrystalFactory();
        $this->crystal = $lightningCrystalFactory->makeCrystal();
        $this->chargeCrystal();

        return $this->crystal;
    }
}

class CharmanderCharger extends PokemonCharger
{
    public function crystalInfuse(){
        $fireCrystalFactory = new FireCrystalFactory();
        $this->crystal = $fireCrystalFactory->makeCrystal();
        $this->chargeCrystal();

        return $this->crystal;
    }
}

class SquirtleCharger extends PokemonCharger
{
    public function crystalInfuse(){
        $waterCrystalFactory = new WaterCrystalFactory();
        $this->crystal = $waterCrystalFactory->makeCrystal();
        $this->chargeCrystal();

        return $this->crystal;
    }
}

