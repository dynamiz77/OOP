<?php


class AccessPokemonDatabase implements AccessDatabase
{
    private $playerId;
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection, $playerId)
    {
        $this->playerId = $playerId;
        $this->dbConnection = $dbConnection;
    }

    public function all()
    {
      // return all of player's pokemon
    }
    public function create($pokemon)
    {
        // create a single pokemon for player
    }
    public function get($playerId)
    {
        // get a single pokemon for player
    }

    public function getAllById($playerId)
    {
        // get all of player's pokemon
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