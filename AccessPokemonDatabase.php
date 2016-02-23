<?php


class AccessPokemonDatabase implements AccessDatabase
{
    private $playerId;

    public function __construct($playerId)
    {
        $this->playerId = $playerId;
    }

    public function all()
    {
      // return all of player's pokemon
    }
    public function create($pokemon)
    {
        // create a single pokemon for player
    }
    public function get($pokemonId)
    {
        // get a single pokemon for player
    }
    public function update($pokemon)
    {
        // update pokemon's attributes for a particular player
    }
    public function delete($pokemonId)
    {
        // delete a single pokemon for a player
    }

}