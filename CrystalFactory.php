<?php

abstract class CrystalFactory
{
    abstract public function makeCrystal();
}

class LightningCrystalFactory extends Crystalfactory
{
    public function makeCrystal()
    {
        //...does other complex tasks specific only to a lightningCrystal
        // to generate the actual lightning crystal...
        return new lightningCrystal();
    }
}

class FireCrystalFactory extends Crystalfactory
{
    public function makeCrystal()
    {
        // ... does other complex tasks specific only to a fireCrystal
        // to generate the actual fire crystal element...
        return new fireCrystal();
    }
}

class WaterCrystalFactory extends Crystalfactory
{
    public function makecrystal()
    {
        // ... does other complex tasks specific only to a fireCrystal
        // to generate the actual water crystal element...
        return new waterCrystal();
    }
}
