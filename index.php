<?php

require __DIR__.'/vendor/autoload.php';

$passwordGenerator = new \Web1\StringGenerator\PasswordGenerator();

//var_dump(new \Web1\StringGenerator\PasswordGenerator());

echo \Web1\StringGenerator\PasswordGenerator::getRandomString(25, \Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD);