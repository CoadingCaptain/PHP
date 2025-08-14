<?php

// ✅ JSON মানে হলো JavaScript Object Notation —
// এটা এক ধরনের data format যেটা দেখতে অনেকটা JavaScript object এর মতো, কিন্তু আসলে text আকারে ডাটা সংরক্ষণ ও বিনিময়ের জন্য ব্যবহার হয়।

// ✅ মূল বৈশিষ্ট্য
// Lightweight (হালকা ফরম্যাট, কম সাইজ)
// Human-readable (মানুষ সহজে পড়তে পারে)
// Language-independent (যে কোনো প্রোগ্রামিং ভাষায় ব্যবহার করা যায়)
// Key-value pair আকারে ডাটা থাকে

// 🔶 json_encode() - এর কাজ হলো কোনো PHP ডাটা (array, object ইত্যাদি) কে JSON স্ট্রিং এ কনভার্ট করা।

// 🔶 Single dimension Associative array --- convert to --- Json Object

// $data = [
//     "name" => "Jack",
//     "age" => "Jack",
// ];
// $newData = json_encode($data);
// echo $newData;

// Output : {"name":"Jack","age":"Jack"}

// 🔶 Multi dimension Associative array --- convert to --- Json Array

// $person = [
//     ["name" => "Alex", "age" => 35],
//     ["name" => "Jane", "age" => 32],
// ];
// $newData = json_encode($person);
// print_r($newData);

// Output : [{"name":"Alex","age":35},{"name":"Jane","age":32}]

// 🔶 json_decode() - এর কাজ হলো কোনো JSON স্ট্রিং কে আবার PHP এর array বা object এ কনভার্ট করা।

// 🔶 Json Object --- convert to --- Single dimension Associative array
// $json = '{"name":"Jack","age":"Jack"}';
// $newJson = json_decode($json, true);
// print_r($newJson);

// Output : Array
//          (
//              [name] => Jack
//              [age] => Jack
//          )

// 🔶 Json Array --- convert to --- Multi dimension Associative array

// $json = '[{"name":"Alex","age":35},{"name":"Jane","age":32}]';
// $newJson = json_decode($json, true);
// print_r($newJson);

// Output : Array
//          (
//              [0] => Array
//                  (
//                      [name] => Alex
//                      [age] => 35
//                  )
//              [1] => Array
//                  (
//                      [name] => Jane
//                      [age] => 32
//                  )
//          )


// Parse error মানে হলো — PHP বা অন্য কোনো প্রোগ্রামিং ভাষা যখন তোমার কোড পড়ছে (parse করছে), 
// তখনই যদি কোনো সিনট্যাক্স (syntax) ভুল পায়, তখন সে কোড রান শুরু করার আগেই থেমে যায় এবং এই error দেখায়।

// echo "hello world"

// এইখানে সেমিকোলন দেয়া হয় নি তাই Parse error আসবে।