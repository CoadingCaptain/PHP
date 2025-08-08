<?php

declare(strict_types=1);

✅ String- কে ছোট থেকে বড় অক্ষরে রুপান্তর করতে

$name = strtoupper("Bangladesh");
echo $name;

 Output : BANGLADESH

✅ String- কে বড় থেকে ছোট অক্ষরে রুপান্তর করতে

$name = strtolower("BANGLADESH");
echo $name;

 Output : bangladesh

✅ String - এর প্রথম অক্ষর বড় করতে

$name = ucwords("bangladesh");
echo $name;

 Output : Bangladesh

✅ String - এর লেন্থ বের করতে

$strLen = strlen("Bangladesh");
echo $strLen;

 Output : 10

✅ String - কে concat করা বা জুড়ে দেওয়া

$s1 = "Hello";
$s2 = "World";
echo $s1 . " " . $s2;

 Output : Hello World

✅ substr() - যেটা দিয়ে কোনো স্ট্রিং-এর নির্দিষ্ট অংশ (substring) কেটে নেয়া যায় ।

$name = substr("Bangladesh", 0, 6);
echo $name;

 Output : Bangla

✅ String - কে reverse করা বা উল্টে দেওয়া

$name = strrev("Bangladesh");
echo $name;

 Output : hsedalgnaB

✅ Another Way

$name = "Bangladesh";
$rev = "";
for ($i = strlen($name) - 1; $i >= 0; $i--) {
    $rev .= $name[$i];
}
echo $rev;

 Output : hsedalgnaB

✅ str_repeat() -  যেটা দিয়ে একটি স্ট্রিংকে একাধিকবার রিপিট (পুনরাবৃত্তি) করা যায়।

$str = str_repeat("** ", 10);
echo $str;

 Output : ** ** ** ** ** ** ** ** ** ** 

✅ Another Way

$str = "😎 ";
$repeat = "";
for ($i = 1; $i <= 10; $i++) {
    $repeat .= $str;
}
echo $repeat;

 Output : 😎 😎 😎 😎 😎 😎 😎 😎 😎 😎

str_shuffle() - যেটা দিয়ে একটি স্ট্রিং-এর অক্ষরগুলোর অর্ডার এলোমেলোভাবে (randomly) সাজানো হয়।

$str = str_shuffle("Bangladesh");
echo $str;

 Output : adBgnealhs

✅ trim() - একটি স্ট্রিং-এর শুরু এবং শেষের অপ্রয়োজনীয় স্পেস (whitespace) বা নির্দিষ্ট কিছু ক্যারেক্টার কেটে ফেলা।

$str = trim("   Hello World   ");
echo $str;

 Output : Hello World

✅ ltrim() - একটি স্ট্রিং-এর বাম দিকের অপ্রয়োজনীয় স্পেস (whitespace) কেটে ফেলে।

$str = ltrim("       Canada");
echo $str;

 Output : Canada

✅ rtrim() - একটি স্ট্রিং-এর ডান দিকের অপ্রয়োজনীয় স্পেস (whitespace) কেটে ফেলে।

$str = rtrim(" Canada   ");
echo $str;

 Output :  Canada

✅ explode() - String to Array convert

$str = explode(" ", "hello world");
print_r($str);

 Output : Array
          (
              [0] => hello
              [1] => world
          )

✅ implode/join() - Array to string convert

$words = ["Hello", "from", "Ostad", "team"];
$newWord = implode(" ", $words);
echo $newWord . ".";

 Output : Hello from Ostad team.

Working

$name1 = "Md.  Abdullah";
$name2 = "Md..  Abdur Rahman";
$name3 = "Md  Abdul ..Malek";
$rep1 = str_replace("  ", " ", $name1);
$rep2 = str_replace(["  ", ".."], [" ", "."], $name2);

echo $rep1;     Output : Md. Abdullah
echo $rep2;     Output: Md. Abdur Rahman

✅ str_split() -  যেটা কোনো স্ট্রিং (string) কে একটি অক্ষরভিত্তিক অ্যারে (array) তে ভেঙে ফেলে।

$str = str_split("Sweet");

 Output : Array
          (
              [0] => S
              [1] => w
              [2] => e
              [3] => e
              [4] => t
          )

$str = str_split("Beauty", 2);
print_r($str);

 Output : Array
          (
              [0] => Be
              [1] => au
              [2] => ty
          )

✅ strpos() - এর কাজ হলো একটি string-এর ভিতরে কোনো নির্দিষ্ট শব্দ বা অক্ষর কোথায় আছে তা খুঁজে বের করা। এটি প্রথম মিলে যাওয়ার অবস্থান (index) রিটার্ন করে।

$report = "Rahim,Karim,Asif,Motin aj k school theke palaise";
$search = "Monika";
$find = strpos($report, $search);

if ($find !== false) {
    echo "{$search} aj k school theke palaise 😂";
} else {
    echo "{$search} aj k school theke palayny 😊";
}

 Output : Monika aj k school theke palayny 😊
