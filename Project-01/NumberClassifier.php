<?php

$number = (int)readline("Enter a number : ");
if ($number > 0) {
    echo "The number is positive.\n";
} elseif ($number < 0) {
    echo "The number is negative.\n";
} else {
    echo "The number is Zero.";
}
