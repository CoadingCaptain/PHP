<?php

define("Factor", 9 / 5);
define("Offset", 32);

$temperature = (float)readline("Enter temperature value : ");
$choice = (int)readline("Convert to : (1. Fahrenheit 2. Celsius) : ");
if ($choice === 1) {
    $result = $temperature * Factor + Offset;
    echo "Temperature Fahrenheit is $result.";
} elseif ($choice === 2) {
    $result = ($temperature - Offset) / Factor;
    echo "Temperature Celsius is $result.";
} else {
    echo "Invalid Choice.";
}
