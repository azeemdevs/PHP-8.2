<?php
// ------ PHP 8.2 ------

/**
 * PHP 8.2 removes the  dynamic properties but you can enable it by atribute which is commented below.
 */

// #[\AllowDynamicProperties]
class User
{
    public $name;
}

$user = new User();
$user->last_name = 'Doe'; // Deprecated notice

$user = new stdClass();
$user->last_name = 'Doe'; // Still allowed
var_dump($user);
