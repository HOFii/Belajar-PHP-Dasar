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
    "first_name" => "Kiana",
    "last_name" => "Kaslana"
];

$b = [
    "last_name" => "Kaslana",
    "first_name" => "Kawai"
];

var_dump($a == $b);
var_dump($a === $b);