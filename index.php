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


/** return declare goto */

#declare - ticks

#declare = encoding

# declare = strict_types


/** require, require_once, include, include_once */

// require 'file.php';

/** functons */


function foo(): int|float|array // accept null and integer
{
    echo "\nHello from function\n";
    return 1.2;
}


function f1(): mixed // return any type
{
    return "niko";
}

foo();

// declare(strict_types=1);

function my(int|float $x, int|float $y = 10): int|float
{
    return $x + $y;
}

print_r(my(5.4, 6));
echo "\n";


function spread(...$numbers): int
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

print_r(spread(1, 2, 3, 4, 5));


/** named arguments */
echo "\n";
print_r(my(x: 5, y: 54));


echo "\n";

/** variable scopes */
$x = 5;

function glob_vars()
{
    global $x;
    echo $x;
}


echo glob_vars();
echo "\n";

# php stores global variables in GLOBALS
echo $GLOBALS['x'];
echo "\n";


/** anonymouse & arrow functions */

function summ(int ...$numbers): int
{
    return array_sum($numbers);
}


$x = 'summ';
if (is_callable($x)) {
    echo $x(1, 2, 3, 4, 58);
    echo "\n";
}

# lambda  without name
$x = 10;

$sum = function (int ...$nums) use ($x): int {
    echo $x;
    return array_sum($nums);
};

# ფუნქციას რომელიც გადაეცემა სხვა ფუნქციას და იქ იძახება 
# ეწოდება callback ფუნქცია

$new = array_map(function ($element) {
    return $element * 2;
}, [1, 2, 3, 4]);


print_r($new);
echo "\n";

/** arraw function */

$array = [1, 2, 3];

$my_arr = array_map(function ($number) {
    return $number * $number;
}, [1, 2, 3, 4]);

print_r($my_arr);
echo "\n";

$array2 = array_map(fn ($number) => $number * $number, [2, 2, 3, 3]);
print_r($array2);


























echo "\n";
