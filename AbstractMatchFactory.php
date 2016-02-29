<?php

/**
 * Class AbstractMatchFactory
 *
 * This match factory is delegated the task of the creation of:
 *   ~ Player
 *   ~ Opponent
 *   ~ Pokemon
 *   ~ ...all the above in the context of a match and its location
 *
 */

abstract class AbstractMatchFactory
{
    abstract function makePlayer($playerName);
    abstract function makeOpponent($playerName);
    abstract function makePokemon($type);
}


class PhenacCityMatchFactory extends AbstractMatchFactory
{
    private $context = 'PhenacCity';

    public function makePlayer($playerName)
    {
        // TODO: Implement makePlayer() method.
    }

    public function makeOpponent($playerName)
    {
        // TODO: Implement makeOpponent() method.
    }

    public function makePokemon($type)
    {
        // TODO: Implement makePokemon() method.
    }
}

class PyriteColosseum extends AbstractMatchFactory
{
    private $context = 'PyriteColosseum';

    public function makePlayer($playerName)
    {
        // TODO: Implement makePlayer() method.
    }

    public function makeOpponent($playerName)
    {
        // TODO: Implement makeOpponent() method.
    }

    public function makePokemon($type)
    {
        // TODO: Implement makePokemon() method.
    }
}