<?php

✅ 1. sort() → Ascending order (সাধারণ sort)
 Indexed array কে ছোট থেকে বড় সাজায় (key preserve করে না)।

 $numbers = [2, 3, 1, 5];
 sort($numbers);
 print_r($numbers);

 Output : Array
          (
              [0] => 1
              [1] => 2
              [2] => 3
              [3] => 5
          )

 ✅ 2. rsort() → Descending order
 Indexed array কে বড় থেকে ছোট সাজায়।

 $numbers = [2, 3, 1, 5];
 rsort($numbers);
 print_r($numbers);

 Output : Array
          (
              [0] => 5
              [1] => 3
              [2] => 2
              [3] => 1
          )

 ✅ 3. asort() → Associative array: value অনুসারে Ascending sort, Key গুলো ঠিক থাকে, value গুলো sort হয়।

 $numbers = ["a" => 50, "b" => 20, "c" => 40];
 asort($numbers);
 print_r($numbers);

 Output : Array
          (
              [b] => 20
              [c] => 40
              [a] => 50
          )

 ✅ 4. arsort() → Associative array: value অনুসারে Descending sort, Key ঠিক রেখে, বড় থেকে ছোট value অনুযায়ী সাজায়।

 $numbers = ["a" => 50, "b" => 20, "c" => 40];
 arsort($numbers);
 print_r($numbers);

 Output : Array
          (
              [a] => 50
              [c] => 40
              [b] => 20
          )

 ✅ 5. ksort() → Associative array: Key অনুসারে Ascending sort

 $numbers = ["a" => 50, "c" => 40, "b" => 70];
 ksort($numbers);
 print_r($numbers);

 Output : Array
          (
              [a] => 50
              [b] => 70
              [c] => 40
          )

 ✅ 6. krsort() → Associative array: Key অনুসারে Descending sort

 $numbers = ["a" => 50, "c" => 40, "b" => 70];
 krsort($numbers);
 print_r($numbers);

 Output : Array
          (
              [c] => 40
              [b] => 70
              [a] => 50
          )

 ✅ array_filter() - ফাংশনটি ব্যবহার হয় একটি অ্যারে থেকে নির্দিষ্ট শর্ত পূরণ না করা উপাদানগুলো বাদ দিয়ে নতুন অ্যারে তৈরির জন্য।
 🔶 অর্থাৎ, তুমি একটা শর্ত দাও — যে মানগুলো শর্ত পূরণ করে, সেগুলো রেখেই নতুন অ্যারে বানায়।

 $numbers = [1, 2, -1, -2, 3];
 $positive = array_filter($numbers, function ($n) {
     return $n < 0;
 });
 print_r($positive);

 Output : Array
          (
              [2] => -1
              [3] => -2
          )
