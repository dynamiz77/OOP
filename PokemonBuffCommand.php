<?php


/**
 * Class PokemonBuffCommand
 *
 * We're encapsulating the buff ability logic from the player
 * so that they can't manipulate how much damage their Pokemon
 * can deliver when the PokemonBuffCommand is invoked.
 */
abstract class PokemonBuffCommand
{
    protected $pokemon;
    protected $commands = [];

    function __construct(Pokemon $pokemon)
    {
        $this->pokemon = $pokemon;
    }

    abstract function execute();

}

class PhysicalAbilityBuffCommand extends PokemonBuffCommand
{
   function execute()
   {
       // TODO: Add buff command to make physical attack stronger than normal
       array_push($this->commands, new BuffAbility($this->pokemon->physicalAbility()));
   }
}

class SpecialAbilityBuffCommand extends PokemonBuffCommand
{
   function execute()
   {
       // TODO: Add buff command to make special attack stronger than normal
       array_push($this->commands, new BuffAbility($this->pokemon->specialAbility()));
   }
}
