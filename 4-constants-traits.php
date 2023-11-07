<?php

/**
 *  When it commes to re-usablity of common code traits are very helpful.
 *  First Introduced in PHP V5.4. 
 * 
 * PHP 8.2 introduces constants in triats.
 * Which cannot be accessed directly
 * from the trait.
 */

trait AdminTrait
{
    public const ADMIN  = "Azeem Zahid";
}

class User
{
    use AdminTrait;
}

var_dump(User::ADMIN); // string(11) "Azeem Zahid"
var_dump(AdminTrait::ADMIN); // Cannot access trait constant AdminTrait::ADMIN directly
