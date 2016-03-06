<?php

class Player
{
    private $pokemon = array();
    private $name;
    private $pokemonDb;
    private $id;

    public function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
        $this->pokemonDb = new AccessPokemonDatabase(new MySQLConnection(), $this->id);
        $pokemons = $this->pokemonDb->getAllById($id);
        foreach($pokemons as $pokemon)
        {
            array_push($this->pokemon, $pokemon);
        }
    }

    public function callCommand(PokemonBuffCommand $pokemonCommandIn)
    {
        $pokemonCommandIn->execute();
    }
}

$player = new Player('Tyler', 24);

$pokemon = new PikaChu();

$physicalAbility = new PhysicalAbilityBuffCommand($pokemon);
$player->callCommand($physicalAbility);

$specialAbility = new SpecialAbilityBuffCommand($pokemon);
$player->callCommand($physicalAbility);
