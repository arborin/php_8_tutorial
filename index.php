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

echo "\n==================\n";

/** NULL */

$x = null;
echo $x;
var_dump($x);
var_dump(is_null($x));
$x = 123;
var_dump($x);
unset($x);
// var_dump($x);

/** Casting */

$x = null;
var_dump((string)$x);
var_dump((bool)$x);
var_dump((array)$x);

echo "\n==================\n";


/** ARRAYS */

$progLanguage = ['PHP', 'Java', 'Python'];
var_dump($progLanguage[1]);
var_dump(isset($progLanguage[12]));
echo count($progLanguage);
echo "\n";
$progLanguage[] = "C++";
print_r($progLanguage);

// ASSOC ARRAY
$prog = [
    'php' => '8.0',
    'python' => '3.9'
];


print_r($prog['php']);

$arr = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd', null => "empty_string"];
print_r($arr);
print_r($arr['']); // empty_string

unset($arr[1]);
print_r($arr);


/** EXPRESIONS */
print_r($x = 5);


/** OPERATORS */

# arithmetic operators + - * / % **

# Assignment operators = += -= *= /= **=

# string operators . .=

# Comparision operators == === != <> <= =< <=> ?? ?:

# Error control operator
$x = @file('foo.txt');

# increment/decrement operators ++ --

# logical operators && || ! and or xor

# array operators + == === != <>



/** Operator precedence & Associativity */

$x = 5 + 3 * 5;


/** control structures  */

# if else elseif else if

if (false) {
    echo "\nTRUE\n";
} else {
    echo "\nFALSE\n";
}


if (true) :
    echo "\nTest\n";
endif;


/** Loops */
# while

# do while

# for

# foreach


/** switch */


/* mathc */

$payment = 81;

$status = match ($payment) {
    1 => 'paid',
    2, 8 => 'default',
    default => 'unknown payment'
};

print_r($status);



























echo "\n";
