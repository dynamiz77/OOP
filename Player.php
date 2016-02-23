<?php

class Player
{
    private $pokemon = array();
    private $pokemonDb;
    private $id;

    public function __construct()
    {
        $this->pokemonDb = new AccessPokemonDatabase($this->id);
    }
}
