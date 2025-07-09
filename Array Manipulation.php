<?php

// ✅ String to Array convert

// $text = "Hello I am Panda";
// print_r(explode(" ", $text));

// Output : Array
//          (
//              [0] => Hello
//              [1] => I
//              [2] => am
//              [3] => Panda
//          )

// ✅ Array to String convert

// $array = ["Hello", "I", "am", "Panda"];
// print_r(implode(" ", $array));

// Output : Hello I am Panda

// ✅ preg_split() ;

$text = "Potato, Brinjal, Onion,Capsicum,Tomato";
$result = preg_split("/(, |,)/", $text);
print_r($result);

// Output : Array
//          (
//              [0] => Potato
//              [1] => Brinjal
//              [2] => Onion
//              [3] => Capsicum
//              [4] => Tomato
//          )
