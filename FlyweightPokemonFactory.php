<?php

/**
 * Class FlyweightPokemonFactory
 *
 * This pattern can be applied when the creation of a
 * pokemon gets expensive - we can cache the creation
 * so that subsequent calls of creating a pokemon would
 * be an already instantiated pokemon.
 */
class FlyweightPokemonFactory
{
    private $pokemons = array();

    function __construct()
    {
        $this->pokemons['pikaChu'] = NULL;
        $this->pokemons['charmander'] = NULL;
        $this->pokemons['squirtle'] = NULL;
    }

    function getBook($pokemonKey)
    {
        if (NULL == $this->pokemons[$pokemonKey])
        {
            $makeFunction = 'make'.$pokemonKey;
            $this->pokemons[$pokemonKey] = $this->$makeFunction();
        }

        return $this->pokemons[$pokemonKey];
    }

    function makePikaChu()
    {
        $pikaChu = new PikaChu();
        return $pikaChu;
    }

    function makeCharmander()
    {
        $charmander = new Charmander();
        return $charmander;
    }

    function makeSquirtle()
    {
        $squirtle = new Squirtle();
        return $squirtle;
    }
}