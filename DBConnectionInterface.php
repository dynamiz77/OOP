<?php

interface DBConnectionInterface
{
    public function connect();
}

class MySQLConnection implements DBConnectionInterface
{
   public function connect()
   {
       return "MySQLConnection";
   }
}

class PostgresSQLConnection implements DBConnectionInterface
{
   public function connect()
   {
       return "PostgresSQLConnection";
   }
}

class RedisConnection implements DBConnectionInterface
{
   public function connect()
   {
       return "RedisConnection";
   }
}

class CouchDBConnection implements DBConnectionInterface
{
   public function connect()
   {
       return "CouchDBConnection";
   }
}

