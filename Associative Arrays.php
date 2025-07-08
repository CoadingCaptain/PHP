<?php

 ✅ Associative Array হচ্ছে এমন একটি অ্যারে, যেখানে index (key) গুলো সংখ্যা না হয়ে নাম বা string আকারে থাকে।
 🔸 সাধারণ Indexed Array-এর মত 0, 1, 2... এর জায়গায় এখানে আমরা name, email, age ইত্যাদি string key ব্যবহার করতে পারি।

$person = [
    "name" => "Jack",
    "age" => 23,
    "city" => "Tokyo"
];
 print_r($person);

 Output :  Array
          (
              [name] => Jack
              [age] => 23
              [city] => Tokyo
          )

✅ Access Values

 $person = [
     "name" => "Jack",
     "age" => 23,
     "city" => "Tokyo"
 ];
 print_r($person["name"]);

 Output :  Jack

 Add a new key-value pain

 $person = [
     "name" => "Jack",
     "age" => 23,
     "city" => "Tokyo"
 ];
 $person["code"] = 1207;
 print_r($person);

 Output : Array
          (
              [name] => Jack
              [age] => 23
              [city] => Tokyo
              [code] => 1207
          )

✅ Modify a value

 $person = [
     "name" => "Jack",
     "age" => 23,
     "city" => "Tokyo"
 ];
 $person["age"] = 22;
 print_r($person);

 Output : Array
          (
              [name] => Jack
              [age] => 22
              [city] => Tokyo
          )
