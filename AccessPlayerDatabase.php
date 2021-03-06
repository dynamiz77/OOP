<?php


class AccessPlayerDatabase implements AccessDatabase
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function all()
    {
        // get all players
    }
    public function create($player)
    {
        // create a single player
    }
    public function get($playerId)
    {
        // get a single player
    }
    public function update($player)
    {
        // update a single player
    }
    public function delete($playerId)
    {
        // delete a single player
    }
}