<?php

// declare(strict_types=1);

echo "hello world";

// constants
define('NAME', "nika");
const STATUS = 'draft';


echo NAME;
echo STATUS;

// PRE DEFINED CONSTANTS
echo PHP_VERSION;

// variable variables
$foo = 'bar';
$$foo = 'baz';

echo $bar;

// DATA TYPES
// 4 scalar types
# bool - true / false
$compleated = true;
# int - 1, 2, 3, -1 (no decimal)
$score = 55;
# float - 1.4, -10.2
$price = 4.5;
# string - "jemali", "emali", "levani"
$name = "Jemali";

echo gettype($score);
var_dump($price);

// 4 compound types
# array
$companies = [1, 2, 3, 4, 'A', true];
print_r($companies);
# object
# callable
# iterable

// 2 Special types
# resource
# null


// FUCTIONS

function sum(float $x, float $y)
{
    return $x + $y;
}

echo sum(4, "5");

echo "\n==================\n";
// BOOLEAN
$isComplate = true;
# 0 - false
# 0.0 - false
# '' - false
# '0' - false
# [] - false
# null - false


if ($isComplate) {
    echo "Completed";
} else {
    echo "Not Completed";
}


/* FLOATS */

$x = 13.5;
$x = 13_000_0.5;
var_dump($x);

$x = floor((0.1 + 0.7) * 10);
var_dump($x); // 7

$x = ceil((0.1 + 0.2) * 10);
var_dump($x); // 4

$x = PHP_FLOAT_MAX * 2;

var_dump(is_finite($x));

var_dump(floatval($x));

// string converting to float is 0 
var_dump(floatval("nika"));


/** STRONGS */
$firstName = "nika";
$lastName = "Kobaidze";
$name = $firstName . ' ' . $lastName;

echo "${firstName} {$lastName}\n";
echo $name[1] . "\n";
$name[1] = "I";
echo "$name\n";





/** Heredoc */

$text = <<<TEXT

this is text


TEXT;

echo $text;




















echo "\n";
