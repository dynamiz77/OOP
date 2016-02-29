<?php

class Player
{
    private $pokemon = array();
    private $name;
    private $pokemonDb;
    private $id;

    public function __construct()
    {
        $this->pokemonDb = new AccessPokemonDatabase($this->id);
    }

    public function callCommand(PokemonBuffCommand $pokemonCommandIn)
    {
        $pokemonCommandIn->execute();
    }
}

$player = new Player();

$pokemon = new PikaChu();

$physicalAbility = new PhysicalAbilityBuffCommand($pokemon);
$player->callCommand($physicalAbility);

$specialAbility = new SpecialAbilityBuffCommand($pokemon);
$player->callCommand($physicalAbility);
