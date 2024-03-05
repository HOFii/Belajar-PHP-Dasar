<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Gusti", "strtoupper");
sayHello("Gusti", "strtolower");
sayHello("Gusti", function (string $name): string {
    return strtoupper($name);
});
sayHello("Eko", fn($name) => strtoupper($name));