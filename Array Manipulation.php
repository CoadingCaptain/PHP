<?php

✅ String to Array convert

 $text = "Hello I am Panda";
 print_r(explode(" ", $text));

 Output : Array
          (
              [0] => Hello
              [1] => I
              [2] => am
              [3] => Panda
          )

✅ Array to String convert

 $array = ["Hello", "I", "am", "Panda"];
 print_r(implode(" ", $array));

 Output : Hello I am Panda

✅ preg_split() ;

$text = "Potato, Brinjal, Onion,Capsicum,Tomato";
$result = preg_split("/(, |,)/", $text);
print_r($result);

 Output : Array
          (
              [0] => Potato
              [1] => Brinjal
              [2] => Onion
              [3] => Capsicum
              [4] => Tomato
          )

✅ array_values() - Return all the values from the array.

$person = [
    "fname" => "Jane",
    "lname" => "Doe",
    "age" => 23
];
$values = array_values($person);
print_r($values);

 Output : Array
          (
              [0] => Jane
              [1] => Doe
              [2] => 23
          )

✅ array_Keys() - Return all the keys from the array.

$person = [
    "fname" => "Jane",
    "lname" => "Doe",
    "age" => 23
];
$keys = array_keys($person);
print_r($keys);

 Output : Array
          (
              [0] => fname
              [1] => lname
              [2] => age
          )

✅ array_key_exists() - Checks if a key exists an array.

$person = [
    "fname" => "Jane",
    "lname" => "Doe",
    "age" => 23
];
$is_exists = array_key_exists("fname", $person);
print_r($is_exists);

 Output : 1

✅ array_search() - Searches the array for a given value and return the first corresponding key.

$person = [
    "fname" => "Jane",
    "lname" => "Doe",
    "age" => 23
];
$search = array_search("Doe", $person);
print_r($search);

 Output : lname

✅ array_flip() - Exchange all key with their associate values in an array.

$person = [
    "fname" => "Jane",
    "lname" => "Doe",
    "age" => 23
];
$flip = array_flip($person);
print_r($flip);

 Output : Array
          (
              [Jane] => fname
              [Doe] => lname
              [23] => age
          )

✅ count() - Counts the number of elements in an array.

$numbers = [10, 20, 30, 40, 50];
$count = count($numbers);
echo $count;

 Output : 5

✅ sizeof() - An alice of count().

$numbers = [10, 20, 30, 40, 50];
$size = sizeof($numbers);
echo $size;

 Output : 5

✅ array_sum() - Compute the sum of values in an array.

$numbers = [10, 20, 30, 40, 50];
$sum = array_sum($numbers);
echo $sum;

 Output : 150

✅ array_product() - Compute the product of values in an array.

$numbers = [10, 30];
$product = array_product($numbers);
echo $product;

 Output : 300

✅ array_merge() - Merges one or more arrays.

$number1 = [10, 20];
$number2 = [30, 40];
$merged = array_merge($number1, $number2);
print_r($merged);

 Output : Array
          (
              [0] => 10
              [1] => 20
              [2] => 30
              [3] => 40
          )

✅ array_replace() - Replace values from one array to another.

$cities = ["Dhaka", "Khulna", "Bandorban", "Narail"];
$replacement = [2 => "Cox's Bazar"];
$replaced = array_replace($cities, $replacement);
print_r($replaced);

 Output : Array
          (
              [0] => Dhaka
              [1] => Khulna
              [2] => Cox's Bazar
              [3] => Narail
          )

✅ array_unique() - Remove duplicate values in an array.

$value = ["a", "a", "b", "c", "c", "d", "d", "e"];
$unique = array_unique($value);
print_r($unique);

 Output : Array
          (
              [0] => a
              [2] => b
              [3] => c
              [5] => d
              [7] => e
          )

✅ array_revers() - Return an array with elements in reverse order.

$value = ["a", "b", "c", "d", "e"];
$reverse = array_reverse($value);
print_r($reverse);

 Output : Array
          (
              [0] => e
              [1] => d
              [2] => c
              [3] => b
              [4] => a
          )

✅ array_combine() - Combines two arrays: one for keys and the other for values.

$keys = array("a", "b", "c");
$values = array("apple", "banana", "cherry");
$combined = array_combine($keys, $values);
print_r($combined);

 Output : Array
          (
              [a] => apple
              [b] => banana
              [c] => cherry
          )

✅ array_fill() - Fills an array with values.

$filled = array_fill(0, 2, "apple");
print_r($filled);

 Output : Array
          (
              [0] => apple
              [1] => apple
          )

✅ array_push() - Adds one or more elements to the end of an array.

$fruits = array("apple", "banana", "cherry");
array_push($fruits, "date");
print_r($fruits);

 Output : Array
          (
              [0] => apple
              [1] => banana
              [2] => cherry
              [3] => date
          )

✅ array_pop( ) - Removes the last element from an array.

$fruits = array("apple", "banana", "cherry");
array_pop($fruits);
print_r($fruits);

Output :  Array
          (
              [0] => apple
              [1] => banana
          )

✅ array_unshift() - Adds one or more elements to the beginning of an array.

$fruits = array("apple", "banana", "cherry");
array_unshift($fruits, "apricot");
print_r($fruits);

 Output : Array
          (
              [0] => apricot
              [1] => apple
              [2] => banana
              [3] => cherry
          )

✅ array_shift() - Removes the first element from an array.

$fruits = array("apple", "banana", "cherry");
array_shift($fruits);
print_r($fruits);

 Output : Array
          (
              [0] => banana
              [1] => cherry
          )

✅ array_slice() মূল অ্যারেকে পরিবর্তন না করে, তার মধ্যে থেকে নির্দিষ্ট index থেকে নির্দিষ্ট সংখ্যক উপাদান কেটে একটি নতুন অ্যারে তৈরি করে।

$numbers = [1, 2, 3, 4, 5];
$sliced = array_slice($numbers, 1, 3);
print_r($sliced);

 Output : Array
          (
              [0] => 2
              [1] => 3
              [2] => 4
          )

✅ array_splice() ফাংশনটি PHP-তে ব্যবহার হয় একটি অ্যারে থেকে নির্দিষ্ট কিছু উপাদান কেটে ফেলা বা সরিয়ে ফেলা এবং সেখানে নতুন উপাদান যোগ করার জন্য।

$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];
array_splice($fruits, 1, 3);
print_r($fruits);

 Output : Array
          (
              [0] => Apple
              [1] => Grapes
          )

✅ array_intersect() - Computes the intersection of arrays.

$array1 = ["a", "b", "c", "d"];
$array2 = ["b", "c", "e"];
$result = array_intersect($array1, $array2);
print_r($result);

 Output : Array
          (
              [1] => b
              [2] => c
          )

✅ array_diff() - Computes the difference of arrays. It compares the values of the first array with the values of following arrays and returns the differences.

$array1 = ["a", "b", "c", "d"];
$array2 = ["b", "c"];
$result = array_diff($array1, $array2);
print_r($result);

 Output : Array
          (
              [0] => a
              [3] => d
          )

✅ shuffle() - Randomizes the order of) the elements in an array.

$numbers = [1, 2, 3];
shuffle($numbers);
print_r($numbers);

 Output : Array
          (
              [0] => 1
              [1] => 3
              [2] => 2
          )

✅ range() - Creates an array containing a range of elements.

$numbers = range(1, 3);
print_r($numbers);

 Output : Array
          (
              [0] => 1
              [1] => 2
              [2] => 3
          )

$letters = range('A', 'C');
print_r($letters);

 Output : Array
          (
              [0] => A
              [1] => B
              [2] => C
          )



✅ Using a step value
$evenNumbers = range(2, 10, 2);
print_r($evenNumbers);

 Output : Array
          (
              [0] => 2
              [1] => 4
              [2] => 6
              [3] => 8
              [4] => 10
          )
