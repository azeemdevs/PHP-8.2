<?php

/**
 * PHP 8.2 introduces new Random Extension the namespace \Random\Randomizer to generate random integer.
 */

use Random\Engine\Xoshiro256StarStar;
use Random\Randomizer;

$obj = new Xoshiro256StarStar(hash('sha256', " A boy from the space  and a data converts according to 256 bit string increease length dont know what i am writing", true));

// var_dump($obj);

$fibers = [];

for ($i = 0; $i < 8; $i++) {
    $fiberRng = clone $obj;
    $obj->jump();

    $fibers[] = new Fiber(function () use ($fiberRng, $i) {
        $randomizer = new Randomizer($fiberRng);

        echo "{$i}: " . $randomizer->getInt(0, 100), PHP_EOL;
    });
}
// The randomizer will use a CSPRNG by default.
$randomizer = new Randomizer();
$fibers = $randomizer->shuffleArray($fibers); // the built in php method that randomize the order of elements in an array.
foreach ($fibers as $fiber) {
    $fiber->start();
}
