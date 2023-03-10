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

# ???????????????????????? ????????????????????? ??????????????????????????? ???????????? ???????????????????????? ?????? ?????? ????????????????????? 
# ????????????????????? callback ?????????????????????

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


/** Datetimes */

date_default_timezone_set('Asia/Tbilisi');


echo time(); // prints seconds seance 1970 
echo "\n";


$curentTime = time();

# format date
$today = date('Y-m-d', $curentTime);
echo $today;
echo "\n";

# timezone
echo date_default_timezone_get() . "\n";
echo "\n";
echo date('Y-m-d', strtotime('tomorrow + 10 month'));
echo "\n";

echo date("Y-m-d", strtotime('last day of february'));
echo "\n";

/** ARRAYS */
# array_chunk
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

print_r(array_chunk($items, 2, true)); // 3th argument optional to keep keys

# array combine

$keys = ['a', 'b', 'c'];
$vals = [1, 2, 3];

print_r(array_combine($keys, $vals));


# array filter 

$ar = [1, 2, 3, 4, 5, 6, 7, 8];
$even = array_filter($ar, fn ($num) => $num % 2 === 0);
print_r($even);

# reindexing values
print_r(array_values($even));

# remove false values
$arr = array_filter([1, 2, [], false, '', 1]);
print_r($arr);


# array_map
$arr = array_map(fn ($num) => $num * 3, [1, 2, 3, 4, 5]);
print_r($arr);

# array_merge
print_r(array_merge([1, 2, 3], [2, 3, 4], [3, 4, 1]));

# array_reduse
$invoiceItems = [
    ['price' => 9.0, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 10.0, 'qty' => 2, 'desc' => 'Item 2'],
    ['price' => 4.8, 'qty' => 8, 'desc' => 'Item 4'],
    ['price' => 7.8, 'qty' => 3, 'desc' => 'Item 5'],
    ['price' => 8.0, 'qty' => 3, 'desc' => 'Item 11'],
];

$total = array_reduce($invoiceItems, fn ($sum, $item) => $sum + $item['qty'] * $item['price']);

print_r($total);


#array search
echo "\n";
$key = array_search('b', [1, 2, 3, 4, 'a', 'b']);

print_r($key);
echo "\n";

# array desctuct
$array = [1, 2, 3, 4];
[$a, $b, $c, $d] = $array;


/** php.ini */

# error_reporting, error_log, display_errors

var_dump(ini_get('error_reporting'));
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);


/** ERROR HANDLING */

error_reporting(E_ALL); // display all, 0 turn off
trigger_error('Example error', E_USER_WARNING);

function errorHandler(int $type, string $message, ?string $file = null, ?int $line = null)
{
    echo "$type # $message # $file # $line";
    exit;
}


set_error_handler('errorHandler', E_ALL);

// echo $nika;

echo "\n";


/** File System */

$dir = scandir(__DIR__);

print_r($dir);


// mkdir('app'); // create directory
// rmdir('app'); // remove directory


if (!file_exists('foo.txt')) {
    echo "Not exists\n";
} else {
    $file = fopen('foo.txt', 'r');

    while (($line = fgets($file)) !== false) {
        print_r($line);
    }
}


























echo "\n";
