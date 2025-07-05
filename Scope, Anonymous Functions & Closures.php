<?php

// PHP-তে scope (স্কোপ) মানে হলো একটি variable কোথা থেকে access করা যাবে, অর্থাৎ সেই ভ্যারিয়েবলটি কোন জায়গায় কাজ করবে বা চলবে — সেটা নির্ধারণ করা।

// PHP-তে মূলত ৩ ধরনের স্কোপ আছে।


// ✅ ১. Local Scope (লোকাল স্কোপ) : যখন একটি function এর ভিতরে কোনো ভ্যারিয়েবল declare করা হয়, তখন সেটা শুধু সেই function এর ভিতরে কাজ করবে।

// function greet()
// {
//     $name = "Panda";
//     echo "Hello $name.";
// }
// greet();

// Output : Hello Panda.


// ✅ ২. Global Scope (গ্লোবাল স্কোপ) : যখন একটি ভ্যারিয়েবল function এর বাইরে declare করা হয়, তখন সেটা globally available হয় — কিন্তু function এর ভিতরে সরাসরি ব্যবহার করা যায় না, unless global keyword ব্যবহার না করা হয়।

// $num = 20;
// function greetUser()
// {
//     global $num;
//     echo $num + 20;
// }
// greetUser();

// Output : 40


// ✅ ৩. Static Scope (স্ট্যাটিক ভ্যারিয়েবল) : কোনো function এর ভিতরে variable declare করলে সাধারণত function শেষ হওয়ার পর variable টা মুছে যায়।
// কিন্তু যদি variable এর আগে static keyword ব্যবহার করা হয়, তাহলে সেই variable এর মান function এর পরেও মনে রাখা হয়।

// function counter()
// {
//     static $count = 0;
//     $count++;
//     echo $count . " ";
// }
// counter();
// counter();

// Output : 1 2


// PHP-তে anonymous function মানে হলো এমন একটা ফাংশন যার নাম নেই।
// ✅ কেন ব্যবহার করা হয়?
// 🔹 যখন ফাংশনটা শুধু এক জায়গায় কাজ করবে, তখন আলাদা করে নাম না দিয়ে অস্থায়ীভাবে বানিয়ে ব্যবহার করা হয়।
// 🔹 এটা variable এর মতো ধরে রাখা যায় বা অন্য ফাংশনের ভিতরে parameter হিসেবে পাঠানো যায়।

// $bio = function ($name) {
//     echo "Hello, $name.";
// };
// $bio("Panda");

// Output : Hello, Panda.


// ✅ PHP তে array_map() এর কাজ : array_map() হলো একটি built-in function, যা একটি function কে প্রতিটি array-এর element এর উপর apply করে এবং একটি নতুন array রিটার্ন করে।

// $numbers = [1, 2, 3, 4];

// $multiply = array_map(function ($n) {
//     return $n * 2;
// }, $numbers);
// print_r($multiply);



// $numbers = [1, 2, 3, 4];
// $newArray = [];

// foreach ($numbers as $number) {
//     $assign = $number * 2;
//     array_push($newArray, $assign);
// }
// print_r($newArray);


// ✅ Closure হচ্ছে : একটি anonymous function (নামহীন function) সেই function-এর বাইরে থাকা কিছু variable access করার ক্ষমতা

// 🧠 সহজভাবে ধরো:
// তুমি একটা function বানিয়েছো, আর সেই function এর ভিতর তুমি বাইরের কোনো variable ব্যবহার করছো।
// সেটা করতে হলে use keyword দিয়ে বাইরের variable ধরে আনতে হয়। তখন এই function টাকে বলে Closure।


$name = "Panda";
$sky = function () use ($name) {
    return "Hello $name.";
};
print_r($sky());

// Output : Hello Panda.
