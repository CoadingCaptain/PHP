<?php

✅ PHP-তে function হলো কোডের এমন একটি অংশ, যেটা আমরা বারবার ব্যবহার করতে পারি, একবার লিখে।

✅ Function এর কাজ কী ? 

-- Function ব্যবহার করলে : 
        
        * কোড পুনরায় লেখা লাগে না (code reusability)

        * কোড ছোট ও পরিষ্কার থাকে

        * Complex কাজকে ছোট ছোট অংশে ভাগ করে ফেলা যায়

        * বড় প্রজেক্টে manage করা সহজ হয়


🟩 সাধারণ function:

function greet(){
    echo "Welcome to PHP." ;
}
greet() ;

 Output : Welcome to PHP.

🟩 Function with Parameter (প্যারামিটার সহ):

function greetUser($name){
    echo "Hello $name." ;
}
greetUser("Jack") ;
greetUser("Alex") ;

 Output : Hello Jack.
 Output : Hello Alex.

✅ Function default or optional params

function sum($x, $y = 10)
{
   echo $x + $y;
}
sum(5);

 Output : 15 

✅ Function multiple params type hinting

function sum(? int|float|string $age)
{
    echo $age;
}
sum("4.56");

 Output : 4.56

✅ Function Null type hinting

function sum(?string $age)
{
    echo $age;
}
sum("Nine");
sum(null);

 Output : Nine

✅ Variadic Function

function countryList(...$country)
{
    print_r($country);
}
countryList("Bangladesh", "Canada", "Australia", "Uk");

 Output : Array
          (
              [0] => Bangladesh
              [1] => Canada
              [2] => Australia
              [3] => Uk
          )

🟩 Function with Return Value:

function add($a,$b){
    return $a + $b ;
}
$result = add(20,25) ;
echo $result ; 

 Output : 45

