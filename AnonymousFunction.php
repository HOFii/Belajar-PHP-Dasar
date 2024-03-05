<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Elaina");
$sayHello("Kiana");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Elaina", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Elaina", $filterFunction);

$firstName = "Gusti";
$lastName = "Alifiraqsha";

$sayHelloEko = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloEko();

$firstName = "Farel";
$lastName = "Mercys";
$sayHelloEko();
