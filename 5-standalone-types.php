<?php

/**
 * PHP 8.2 allows null, false and true as stand alone return types.
 */

class Management
{
    public function userAccount(): true // stand alone type
    {
    }
    public function staffAccount(): false // stand alone type
    {
    }
    public function adminAccount(): null
    {
    }
}

//----------- Before PHP <8.2-------------

class School
{
    public function faculity(): bool
    {
    }
}
