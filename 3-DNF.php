<?php

/** 
 * DNF Stands For disjunctive normal form.
 * 
 * Union -> set of objects that are members of A or B or Both. (PHP 8.0)
 * Intersection  -> intersections contains elements that are in both A and B. (PHP 8.1)
 * 
 * And the combination of union and intersection is called dnf. the intersection must be written with a pair of parentheses or small brackets.
 * 
 * 
 * It is also mentioned that Type declarations are in dnf form.
 */

interface A
{
}
interface B
{
}
class Account
{
    public function visa((A&B)|null $input)
    {
        return $input;
    }
}

//---------- Before PHP 8.2 we write like this:--------------

// class User
// {
//     public function getName($username)
//     {
//         if (($username instanceof A) && ($username instanceof B) || ($username == null))
//             return $username;
//         throw new Exception('Invalid username');
//     }
// }
