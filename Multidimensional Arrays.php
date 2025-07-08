<?php

// ✅  Multidimensional Array মানে এমন একটি অ্যারে যার ভেতরে আরেকটি অ্যারে থাকে।
// একটি অ্যারের ভেতরে এক বা একাধিক অ্যারে থাকে — এটিই Multidimensional Array।

// $person = [
//     ["name" => "Alex", "city" => "London"],
//     ["name" => "Jack", "city" => "Canada"],
// ];
// print_r($person);

// Output : Array
//          (
//              [0] => Array
//                  (
//                      [name] => Alex
//                      [city] => London
//                  )
//              [1] => Array
//                  (
//                      [name] => Jack
//                      [city] => Canada
//                  )
//          )


// Access nested elements

// $person = [
//     ["name" => "Alex", "city" => "London"],
//     ["name" => "Jack", "city" => "Canada"],
// ];
// print_r($person[0]["name"]);

// Output : Alex

// Modify a nested value

$person = [
    ["name" => "Alex", "city" => "London"],
    ["name" => "Jack", "city" => "Canada"],
];
$person[1]["name"] = "Doe";
print_r($person);

// Output : Array
//          (
//              [0] => Array
//                  (
//                      [name] => Alex
//                      [city] => London
//                  )
//              [1] => Array
//                  (
//                      [name] => Doe
//                      [city] => Canada
//                  )
//          )
