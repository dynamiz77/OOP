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

    protected function infuse(CrystalFactory $crystalFactory)
    {
        $this->crystal = $crystalFactory->makeCrystal();
        $this->chargeCrystal();

        return $this->crystal;
    }

    abstract public function crystalInfuser();
}

class PikaChuCharger extends PokemonCharger
{
    public function crystalInfuser(){
        return $this->infuse(new LightningCrystalFactory());
    }
}

class CharmanderCharger extends PokemonCharger
{
    public function crystalInfuser(){
        return $this->infuse(new FireCrystalFactory());
    }
}

class SquirtleCharger extends PokemonCharger
{
    public function crystalInfuser(){
        return $this->infuse(new WaterCrystalFactory());
    }
}

