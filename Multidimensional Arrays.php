<?php

 ✅  Multidimensional Array মানে এমন একটি অ্যারে যার ভেতরে আরেকটি অ্যারে থাকে।
 একটি অ্যারের ভেতরে এক বা একাধিক অ্যারে থাকে — এটিই Multidimensional Array।

 ✅ Multidimensional Indexed Array এমন একটি অ্যারে যেখানে প্রতিটি উপাদান আবার একটি অ্যারে হয়ে থাকে — অর্থাৎ অ্যারের ভিতরে অ্যারে।

 🔶 Basic Multidimensional Indexed Array

 $students = [
     ["Alex", "Canada", 23],
     ["Jack", "London", 25],
 ];
 print_r($students);

 Output : Array
          (
              [0] => Array
                  (
                      [0] => Alex
                      [1] => Canada
                      [2] => 23
                  )
              [1] => Array
                  (
                      [0] => Jack
                      [1] => London
                      [2] => 25
                  )
          )

 🔶 Access করা (ডেটা বের করা)

 $students = [
     ["Alex", "Canada", 23],
     ["Jack", "London", 25],
 ];
 print_r($students[1][1]);

 Output : London


 ✅ PHP তে Multidimensional Associative Array হলো এমন একটি অ্যারে যেখানে প্রতিটি উপাদান আবার একটি অ্যাসোসিয়েটিভ অ্যারে হয় — অর্থাৎ: key-value pair এর মধ্যে অ্যারে।

 🔶 Basic Multidimensional Associative Array

 $students = [
     [
         "name" => "David",
         "age" => 17,
         "city" => "Canada"
     ],

     [
         "name" => "Alex",
         "age" => 19,
         "city" => "America"
     ]
 ];

 print_r($students);

 Output : Array
          (
              [0] => Array
                  (
                      [name] => David
                      [age] => 17
                      [city] => Canada
                  )
              [1] => Array
                  (
                      [name] => Alex
                      [age] => 19
                      [city] => America
                  )
          )

 🔶 Access করা (ডেটা বের করা):

 $students = [
     [
         "name" => "David",
         "age" => 17,
         "city" => "Canada"
     ],

     [
         "name" => "Alex",
         "age" => 19,
         "city" => "America"
     ]
 ];

 print_r($students[0]["name"]);

 Output : David
