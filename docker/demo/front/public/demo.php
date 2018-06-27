<?php

// This is a bad formated file, use the following command to fix it :
//
// bin/tools front vendor/bin/php-cs-fixer fix web/ --level=symfony --fixers=short_array_syntax --diff --dry-run

$foo =  array(
    "With",
    'Invalid' ,
    'Array'
);

/**
 * Returns a string
 * @param boolean $baz
 * @return string
 */
function bar($baz)
{
    return $baz ? 'well done' : 'bad.';
}
