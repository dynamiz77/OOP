<?php

/**
 * Class Pokemon
 *
 * Delegated the responsibility of creating Pokemon
 */

abstract class Pokemon {
    protected $charger;
    abstract public function physicalAbility();
    abstract public function specialAbility();
}

class PikaChu extends Pokemon
{
    private $lightningBallRoll;
    private $lightningBolt;
    private $lightningCrystal;

    public function  __construct()
    {
        // Composition
        $this->charger = new PikaChuCharger();
        $this->lightningCrystal = $this->charger->crystalCreateAndInfuse();
    }

    public function physicalAbility()
    {
        $this->lightningBallRoll = 'ball roll attack!';

        return $this->lightningBallRoll;
    }

    /**
     * This ability uses up lighting crystal's energy - crystal then dissipates!
     * We need to create a new crystal then charge it.
     */
    public function specialAbility()
    {
        $this->lightningBolt = 'lightning strike!';
        $this->lightningCrystal = null;
        $this->charger->crystalCreateAndInfuse();

        return $this->lightningBolt;
    }
}

class Charmander extends Pokemon
{
    private $fireball;
    private $tailSwipe;
    private $fireCrystal;

    public function  __construct()
    {
        $this->charger = new CharmanderCharger();
        $this->fireCrystal = $this->charger->crystalCreateAndInfuse();
    }

    public function physicalAbility()
    {
        $this->tailSwipe = 'tail swipe attack!';

        return $this->tailSwipe;
    }
    /**
     * This ability uses up fire crystal's energy - crystal then dissipates!
     * We need to create a new crystal then charge it.
     */
    public function specialAbility()
    {
        $this->fireball = 'fireball blast!';
        $this->fireCrystal = null;
        $this->charger->crystalCreateAndInfuse();

        return $this->fireball;
    }
}

class Squirtle extends Pokemon
{
    private $waterSpike;
    private $tornadoRoll;
    private $waterCrystal;

    public function __construct()
    {
        $this->charger = new CharmanderCharger();
        $this->waterCrystal = $this->charger->crystalCreateAndInfuse();
    }

    public function physicalAbility()
    {
        $this->tornadoRoll = 'tornado roll attack!';

        return $this->tornadoRoll;
    }

    /**
     * This ability uses up fire crystal's energy - crystal then dissipates!
     * We need to create a new crystal then charge it.
     */
    public function specialAbility()
    {
        $this->waterSpike = 'water spike!';
        $this->waterCrystal = null;
        $this->charger->crystalCreateAndInfuse();

        return $this->waterSpike;
    }
}
