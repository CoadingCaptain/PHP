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


🟩 Function with Return Value:

function add($a,$b){
    return $a + $b ;
}
$result = add(20,25) ;
echo $result ; 

 Output : 45
