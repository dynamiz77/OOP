<?php

interface AccessDatabase
{
    public function all();
    public function create($object);
    public function get($id);
    public function getAllById($id);
    public function update($object);
    public function delete($id);
}
