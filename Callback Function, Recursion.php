<?php

✅ Callback Function মানে হলো — “একটা ফাংশনের মধ্যে আরেকটা ফাংশনকে কল করার জন্য নাম হিসেবে পাঠানো।”
 এটা PHP-তে অনেক array function ও custom logic-এ দরকার হয়।

 function square($n)
 {
     return $n * $n;
 }
 $numbers = [2, 4, 6, 8];
 $squares = array_map("square", $numbers);
 print_r($squares);

 Output : Array
          (
              [0] => 4
              [1] => 16
              [2] => 36
              [3] => 64
          )


✅ Recursive Function হলো এমন একটা ফাংশন, যে ফাংশন নিজেকেই আবার কল করে।
 📢 সহজ ভাষায়:
 একটা function কাজ করতে গিয়ে আবার নিজেকেই ডাকে যতক্ষণ না কোনো একটা condition মিলে যায় — এটাকেই recursion বলে।

function sum($n)
{
    if ($n <= 0) {
        return 1;
    }
    return $n * sum($n - 1);
}
echo (sum(5));

 Output : 120
