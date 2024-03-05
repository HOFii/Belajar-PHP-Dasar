<?php

function createName()
{
    $name = "Gusti"; // local scope
}

createName();
echo $name . PHP_EOL;
