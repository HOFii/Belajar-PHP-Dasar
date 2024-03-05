<?php

$first = [
    "first_name" => "Gusti"
];

$last = [
    "first_name" => "Gusti",
    "last_name" => "Alifiraqsha"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Gusti",
    "last_name" => "Alifiraqsha"
];

$b = [
    "last_name" => "Alifiraqsha",
    "first_name" => "Gusti"
];

var_dump($a == $b);
var_dump($a === $b);