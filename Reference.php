<?php

$name = "Gusti";

$otherName = &$name;

$otherName = "Elaina";

echo $name . PHP_EOL;

function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;


function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;