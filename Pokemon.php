<?php

/**
 * Class Pokemon
 *
 * Delegated the responsibility of creating Pokemon
 */

abstract class Pokemon {
    protected $charger;
    protected $playerId;
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
    }
}
