<?php

// 📌 Indexed Array কী?
// PHP-তে Indexed Array এমন একটি অ্যারে যেখানে উপাদানগুলো (elements) স্বয়ংক্রিয়ভাবে সংখ্যা (index) দিয়ে সাজানো থাকে।
// প্রতিটি মানের একটি সংখ্যা index থাকে যা সাধারণত 0 থেকে শুরু হয়।

// $numbers = [2, 4, 6, 8];
// print_r($numbers);

// Output : Array
//          (
//              [0] => 2
//              [1] => 4
//              [2] => 6
//              [3] => 8
//          )


// Add a new element

// $numbers = [1, 2, 3, 4];
// $numbers[] = 5;
// print_r($numbers);

// Output : Array
//          (
//              [0] => 1
//              [1] => 2
//              [2] => 3
//              [3] => 4
//              [4] => 5
//          )


// Modify an element

// $numbers = [1, 2, 3, 4];
// $numbers[3] = 5;
// print_r($numbers);

// Output : Array
//          (
//              [0] => 1
//              [1] => 2
//              [2] => 3
//              [3] => 5
//          )


// Remove an element

// $numbers = [2, 4, 6, 8];
// unset($numbers[2]);
// print_r($numbers);

// Output : Array
//          (
//              [0] => 2
//              [1] => 4
//              [3] => 8
//          )


// 🔹 PHP তে array_slice() ফাংশনের কাজ বাংলায় ব্যাখ্যা:
// array_slice() হলো PHP-র একটি ইন-বিল্ট ফাংশন যেটা ব্যবহার করে আমরা একটি অ্যারে থেকে নির্দিষ্ট অংশ (slice) কেটে বের করে আনতে পারি।

// 🧠 মূল কাজ:
// array_slice() মূল অ্যারেকে পরিবর্তন না করে, তার মধ্যে থেকে নির্দিষ্ট index থেকে নির্দিষ্ট সংখ্যক উপাদান কেটে একটি নতুন অ্যারে তৈরি করে।

// $numbers = [1, 2, 3, 4, 5];
// $sliced = array_slice($numbers, 1, 3);
// print_r($sliced);

// Output : Array
//          (
//              [0] => 2
//              [1] => 3
//              [2] => 4
//          )


// 🔄 preserve_keys ব্যবহার করে:

// $numbers = [1, 2, 3, 4, 5];
// $sliced = array_slice($numbers, 1, 3, true);
// print_r($sliced);

// Output : Array
//          (
//              [1] => 2
//              [2] => 3
//              [3] => 4
//          )


// ➖ যদি offset negative হয়?

// $fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];
// $sliced = array_slice($fruits, -2);
// print_r($sliced);

// Output : Array
//          (
//              [0] => Orange
//              [1] => Grapes
//          )
// 🔍 ব্যাখ্যা: -2 মানে শেষ থেকে ২টা উপাদান (শেষের দিকে slice নেওয়া)


// 🔹 PHP তে array_splice() এর কাজ বাংলা ব্যাখ্যা সহ:
// array_splice() ফাংশনটি PHP-তে ব্যবহার হয় একটি অ্যারে থেকে নির্দিষ্ট কিছু উপাদান কেটে ফেলা বা সরিয়ে ফেলা এবং সেখানে নতুন উপাদান যোগ করার জন্য।

// 🧠 মূল কাজ:
// 👉 array_splice() মূল অ্যারেতেই পরিবর্তন করে দেয়।
// 👉 এটি একটি অ্যারে থেকে উপাদান সরিয়ে দেয়, এবং চাইলে সেখানে নতুন উপাদানও বসাতে পারে।

// ✅ উদাহরণ ১: শুধুমাত্র কেটে ফেলা

// $fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];
// array_splice($fruits, 1, 3);
// print_r($fruits);

// Output : Array
//          (
//              [0] => Apple
//              [1] => Grapes
//          )


// ✅ উদাহরণ ২: কেটে নতুন উপাদান যোগ করা

// $fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];
// array_splice($fruits, 1, 3, ["Cherry"]);
// print_r($fruits);

// Output : Array
//          (
//              [0] => Apple
//              [1] => Cherry
//              [2] => Grapes
//          )


// ✅ উদাহরণ ৩: শুধু যোগ করা, কিছু কাটা হয়নি

$fruits = ["Apple", "Banana", "Mango"];
array_splice($fruits, 3, 0, ["Cherry"]);
print_r($fruits);

// Output : Array
//          (
//              [0] => Apple
//              [1] => Banana
//              [2] => Mango
//              [3] => Cherry
//          ) 