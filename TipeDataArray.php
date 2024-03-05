<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Gusti", "Alifiraqsha", "Akbar"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Elaina";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Kiana";
var_dump($names);

var_dump(count($names));

$eko = array(
    "id" => "gusti",
    "name" => "Gusti Alifiraqsha",
    "age" => 30,
    "address" => array(
        "city" => "Bogor",
        "country" => "Indonesia"
    )
);
var_dump($eko);

var_dump($eko["name"]);
var_dump($eko["address"]["country"]);

$budi = [
    "id" => "elaina",
    "name" => "Elaina Desuka",
    "age" => 35,
    "address" => [
        "city" => "Isekai",
        "country" => "Indonesia"
    ]
];
var_dump($budi);