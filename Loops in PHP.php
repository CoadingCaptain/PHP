<?php

✅ Loop এর কাজ:
 একই কোড বারবার চালানোর জন্য loop ব্যবহার করা হয় যতক্ষণ না একটি নির্দিষ্ট শর্ত পূরণ হয়।

 1. for loop
 যখন জানা থাকে কতবার চলবে, তখন for loop ব্যবহার করা হয়।

 for($i = 1 ; $i <= 5 ; $i++){
     echo $i ;
 }

 Output : 12345


 2. while loop
 যতক্ষণ একটি শর্ত সত্য থাকে, ততক্ষণ কোড চলবে।

 $i = 5 ;
 while($i>0){
     echo $i ;
     $i-- ;
 }

 Output : 54321


 3. do...while loop
 কমপক্ষে একবার কোড চালাবে, তারপর শর্ত চেক করবে।

 $i = 1 ;
 do{
     echo $i ;
     $i++ ;
 }while($i<=5) ;

 Output : 12345


 4. foreach loop
 array বা list এর উপরে লুপ চালানোর জন্য ব্যবহার হয়।

$fruits = ['apple','orange','cherry','banana'] ;
foreach($fruits as $item){
    echo $item." " ;
}

 Output : apple orange cherry banana 


 ✅ Loop over Multidimensional Indexed Array

 $numbers = [
     [10, 20, 30],
     [40, 50, 60],
     [70, 80, 90]
 ];

 foreach ($numbers as $parentNumber) {
     foreach ($parentNumber as $childNumber) {
         print_r($childNumber . " ") ;
     }
 }

 Output : 10 20 30 40 50 60 70 80 90 

 ✅ Loop over Multidimensional Associative Array

 $students = [
     [
         "name" => "Raj",
         "age" => 18,
         "city" => "Dhaka"
     ],
     [
         "name" => "Amin",
         "age" => 19,
         "city" => "Khulna"
     ]
 ] ;
 foreach ($students as $parentKey => $parentValue) {
     foreach ($parentValue as $childKey => $childValue) {
         print_r($childKey . " : " . $childValue . " ") ;
     }
     echo PHP_EOL ;
 }

 Output : name : Raj age : 18 city : Dhaka 
          name : Amin age : 19 city : Khulna

 ✅ শুধু প্রথম ইনডেক্স এর মান দেখতে চাইলে

$students = [
    [
        "name" => "Raj",
        "age" => 18,
        "city" => "Dhaka"
    ],
    [
        "name" => "Amin",
        "age" => 19,
        "city" => "Khulna"
    ]
];

foreach ($students[0] as $pKey => $pValue) {
    print_r($pKey . " : " . $pValue . " ") ;
}

  Output : name : Raj age : 18 city : Dhaka 

✅ Fibonacci Series

$vo = 0;
$o = 1;
$n = 1;
for ($i = 0; $i <= 10; $i++) {
     echo $vo . "  ";
     $o = $n;
     $n = $vo + $o;
     $vo = $o;
}

 Output : 0  1  1  2  3  5  8  13  21  34  55 

✅ Factorial

function factorial($n)
{
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}
echo factorial(5);

 Output : 120

✅ Sum using Variadic function 

function sum(...$numbers)
{
    $result = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $result += $numbers[$i];
    }
    return $result;
}
print_r(sum(10, 20, 30, 40, 50, 60));

 Output : 210
